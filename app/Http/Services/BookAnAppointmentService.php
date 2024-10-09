<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{BookAnAppointment};
use Illuminate\Support\Str;
use App\Http\DataTable\BookAnAppointmentDataTable as DataTable;
use Auth;
use Mail;
use DB;

class BookAnAppointmentService {
    public function __construct(
        DataTable $datatable,
        BookAnAppointment $BookAnAppointment
    ) {
        $this->datatable= $datatable;
        $this->BookAnAppointment = $BookAnAppointment;
    }

    //users list
    public function indexList(Request $request){
        return $this->datatable->indexList($request);
    }

    public function show($request, $id){
        $BookAnAppointment = BookAnAppointment::where('id', $id)->first();
        $div = '';
        if($BookAnAppointment){
            $div = "<div class='col-md-6 float-left'>
            <p><span style='word-break: break-all;'><strong>Name : </strong> $BookAnAppointment->full_name</span></p>
            </div>

            <div class='col-md-6 float-left'>
                    <p><span style='word-break: break-all;'><strong>Contact Number : </strong> + $BookAnAppointment->dial_code $BookAnAppointment->mobile_number</span></p>
            </div>
            

            <div class='col-md-12 float-left'>
                    <p><span  style='word-break: break-all;'><strong>Management Experirnce : </strong>  $BookAnAppointment->management_experirnce</span></p>
            </div>
            <div class='col-md-12 float-left'>
                    <p><span  style='word-break: break-all;'><strong>Achivements : </strong>  $BookAnAppointment->achivements</span></p>
            </div>
            <div class='col-md-12 float-left'>
                <p><span  style='word-break: break-all;'><strong>Why Wigomania : </strong>  $BookAnAppointment->why_wigomania</span></p>
            </div>
            <div class='col-md-12 float-left'>
                    <p><span  style='word-break: break-all;'><strong>Do You Belve You Have What It Takes : </strong>  $BookAnAppointment->believe </span></p>
            </div>";
        }
        return $div;
    }

    public function delete($id){
        BookAnAppointment::where('id', $id)->delete();
        return true;
    }
}
