<?php
namespace App\Exports;

use App\Models\{TransactionLog, UserRequest};
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

// use Illuminate\Support\Facades\DB;

class SummaryExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize, WithStyles, WithEvents
{
    use Exportable, RegistersEventListeners;


    public function query()
    {
        // dd(request()->all());
        $start = Carbon\Carbon::parse(request()->get('start_date'))->format('Y-m-d');
        $end = Carbon\Carbon::parse(request()->get('end_date'))->format('Y-m-d');
        $user = TransactionLog::query();
        if(request()->get('full_log')){
            // dd(request()->get('full_log'));
        }else{
            $user->whereIn('type', ['paid', 'cancelled']);
        }

        if (request()->has('start_date') && !empty(request()->get('start_date'))) {
            $user->whereBetween(DB::raw('DATE(created_at)'), [$start, $end]);
        }
        $request = request()->all();
        $user->whereHas('user_request', function ($q) use ($request) {
            $q->where('ship', 'LIKE', "%{$request['ship']}%");
        });

        $user->whereHas('user_request', function ($q) use ($request) {
            $q->where('type', 'LIKE', "%{$request['type']}%");
        });
        return $user;
    }

    /**
    * @return \Illuminate\Support\Collection
    */


    public function headings(): array
    {

        return [
            'Sr.No',
            'Date',
            'Ship',
            'Type',
            'Name',
            'Discription',
            'Amount'
        ];


	}
    public function map($user): array
    {

        if($user->type == 'cancelled'){
            $cancelled = '-'.$user->amount;
        }else{
            $cancelled = $user->amount;
        }

        return [
            $user->id,
            Carbon\Carbon::parse($user->created_at)->format('Y-m-d'),
            $user->ship,
            $user->type,
            $user->userrequest->name,
            $user->discription,
            $cancelled,


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
