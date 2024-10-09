<?php
namespace App\Exports;

use App\Models\{Review, User};
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Carbon;
use DB;
use Auth;

// use Illuminate\Support\Facades\DB;

class ReviewExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize, WithStyles, WithEvents
{
    use Exportable, RegistersEventListeners;

    public function query()
    {
        $start = Carbon\Carbon::parse(request()->get('start_date'))->format('Y-m-d');
        $end = Carbon\Carbon::parse(request()->get('end_date'))->format('Y-m-d');
        $review = Review::query();
        if(Auth::user()->role != 1){
            $review->where('brand_id', Auth::user()->brand_id);
            $review->whereIn('restaurant_id', [session('RestaurantId')]);
        }else{
            if(session('brand_id')){
                $review->where('brand_id', session('brand_id'));
            }
        }
        if (request()->has('start_date') && !empty(request()->get('start_date'))) {
            $review->whereBetween(DB::raw('DATE(created_at)'), [$start, $end]);
        }

        if(request()->get('restaurant_filter')){
            $review->where('restaurant_id', request()->get('restaurant_filter'));
        }

        if(request()->get('status_filter')){
            $status = 0;
            if(request()->get('status_filter') == 'Pending') $status = 2;
            if(request()->get('status_filter') == 'Close') $status = 1;
            if(request()->get('status_filter') == 'Open') $status = 0;
            $review->where('status', $status);
        }

        if(request()->get('type_of_feedback_filter')){
            if(request()->get('type_of_feedback_filter') == 'Detractor'){
                $review->whereBetween('rating', [0, 6]);
            }elseif(request()->get('type_of_feedback_filter') == 'Passive'){
                $review->whereBetween('rating', [7, 8]);
            }elseif(request()->get('type_of_feedback_filter') == 'Promoter'){
                $review->whereBetween('rating', [9, 10]);
            }elseif(request()->get('type_of_feedback_filter') == 'Appreciation' || request()->get('type_of_feedback_filter') == 'Concern'){
                $review->where('type_of_feedback', request()->get('type_of_feedback_filter'));
            }
        }
        $review->orderBy("id", "DESC");
        return $review;
    }

    /**
    * @return \Illuminate\Support\Collection
    */


    public function headings(): array
    {
        return [
            'Sr.No',
            'Customer Name',
            'Customer Email',
            'Customer Phone',
            'Ticket Id',
            'Brand',
            'Restaurant',
            'Type Of Feedback',
            'Rating',
            'Date',
            'Time',
            'TAT',
            'Status',
            'Comment',
            'Overall Product?',
            'Product Taste?',
            'Hot Product?',
            'Cheese & Topping?',
            'Overall Service?',
            'Staff Behaviour?',
            'Overall Ambience?',
            'Premise Cleanliness?',
            'Air Conditioning?',
            'Overall Delivery?',
            'Was On Time?',
            'Delivery Boy Behaviour?'
        ];
	}

    public function map($review): array
    {
        $restaurant = User::where('id', $review->restaurant_id)->pluck('business_name');
        $restaurant = $restaurant->count() > 0 ? $restaurant[0] : '';
        $OverallProduct = $typeOfFeedback = $ProductTaste = $HotProduct = $CheeseTopping = $OverallService = $StaffBehaviour = $OverallAmbience = $PremiseCleanliness = $AirConditioning = $OverallDelivery = $WasOnTime = $DeliveryBoyBehaviour = '';

        foreach($review->ReviewQuestion as $question){
            if($question->question == 'Overall Product?') $OverallProduct = $question->answer;
            if($question->question == 'Product Taste?') $ProductTaste = $question->answer;
            if($question->question == 'Hot Product?') $HotProduct = $question->answer;
            if($question->question == 'Cheese & Topping?') $CheeseTopping = $question->answer;
            if($question->question == 'Overall Service?') $OverallService = $question->answer;
            if($question->question == 'Staff Behaviour?') $StaffBehaviour = $question->answer;
            if($question->question == 'Overall Ambience?') $OverallAmbience = $question->answer;
            if($question->question == 'Premise Cleanliness?') $PremiseCleanliness = $question->answer;
            if($question->question == 'Air Conditioning?') $AirConditioning = $question->answer;
            if($question->question == 'Overall Delivery?') $OverallDelivery = $question->answer;
            if($question->question == 'Was On Time?') $WasOnTime = $question->answer;
            if($question->question == 'Delivery Boy Behaviour?') $DeliveryBoyBehaviour = $question->answer;
        }
        if($review->rating){
            if($review->rating > 0 && $review->rating < 7){
                $typeOfFeedback = 'Detractor';
            }elseif($review->rating < 9 && $review->rating > 6){
                $typeOfFeedback = 'Passive';
            }elseif($review->rating < 11 && $review->rating > 8){
                $typeOfFeedback = 'Promoter';
            }
        }else{
            $typeOfFeedback = $review->type_of_feedback;
        }

        $interval = '';
                $hour = 0;
                if($review->closed_at){
                    $dat1 = $review->created_at;
                    $dat2 = $review->closed_at;
                    $interval = $dat1->diff($dat2);
                    if($interval->format('%d')){
                        $hour = ($interval->format('%d') * 24) + $interval->format('%h');
                    }else{
                        $hour = $interval->format('%h');
                    }
                    $interval = $hour.":".$interval->format('%i')." hrs";
                }else{
                    date_default_timezone_set("Asia/Calcutta");
                    $dat1 = $review->created_at;
                    $dat2 = date('Y-m-d H:i:s');
                    $interval = $dat1->diff($dat2);
                    if($interval->format('%d')){
                        $hour = ($interval->format('%d') * 24) + $interval->format('%h');
                    }else{
                        $hour = $interval->format('%h');
                    }
                    $interval = $hour.":".$interval->format('%i')." hrs";
                }
        // dd($OverallProduct, $ProductTaste, $HotProduct, $CheeseTopping, $OverallService, $StaffBehaviour, $OverallAmbience, $PremiseCleanliness, $AirConditioning, $OverallDelivery, $WasOnTime, $DeliveryBoyBehaviour);
        return [
            $review->id,
            $review->customer_name,
            $review->customer_email,
            $review->customer_phone,
            $review->reference_no,
            $review->brand->brand,
            $restaurant,
            $typeOfFeedback,
            $review->rating,
            Carbon\Carbon::parse($review->created_at)->format('Y-m-d'),
            Carbon\Carbon::parse($review->created_at)->format('H : i'),
            $interval,
            $review->status == 0 ? 'Open' : ($review->status == 1 ? 'Close' : 'Pending'),
            $review->description,
            $OverallProduct,
            $ProductTaste,
            $HotProduct,
            $CheeseTopping,
            $OverallService,
            $StaffBehaviour,
            $OverallAmbience,
            $PremiseCleanliness,
            $AirConditioning,
            $OverallDelivery,
            $WasOnTime,
            $DeliveryBoyBehaviour
        ];

    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
            // 'D'  => ['font' => ['color' => ['argb' => 'EB2B02']]],
        ];
    }

    public static function afterSheet(AfterSheet $event)
    {
        // ray(get_class_methods($event->sheet));
        // $styleArray = [
        //     'borders' => [
        //         'outline' => [
        //             'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
        //             'color' => ['argb' => 'FFFF0000'],
        //         ],
        //     ],
        // ];
        // $event->sheet->getDelegate()->getStyle('B2:D8')->applyFromArray($styleArray);
        // $cellRange = 'A1:D4'; // All headers
        //$event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
    }

    // public static function beforeSheet(BeforeSheet $event)
    // {
    //     $event->sheet->getActiveSheet()->getPageSetup()
    //         ->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
    // }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:Y1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
                $event->sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE)->setpaperSize(9);
                // $sheet->;
            },
        ];
    }


}
