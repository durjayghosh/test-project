<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{ReachUs};
use Illuminate\Support\Str;
use App\Http\DataTable\ReachUsDataTable as DataTable;
use Auth;
use Mail;
use DB;

class ReachUsService {
    public function __construct(
        DataTable $datatable,
        ReachUs $ReachUs
    ) {
        $this->datatable= $datatable;
        $this->ReachUs = $ReachUs;
    }

    //users list
    public function indexList(Request $request){
        return $this->datatable->indexList($request);
    }

    public function show($request, $id){
        $ReachUs = ReachUs::where('id', $id)->first();
        $div = '';
        if($ReachUs){
            $div = "<div class='col-md-6 float-left'>
            <p><span style='word-break: break-all;'><strong>Full Name : </strong> $ReachUs->full_name</span></p>
            </div>
            <div class='col-md-6 float-left'>
                    <p><span  style='word-break: break-all;'><strong>Email : </strong> $ReachUs->email</span></p>
            </div>

            <div class='col-md-6 float-left'>
                    <p><span style='word-break: break-all;'><strong>Mobile Number : </strong> +$ReachUs->dial_code $ReachUs->mobile_number</span></p>
            </div>
            <div class='col-md-6 float-left'>
                    <p><span style='word-break: break-all;'><strong>Coupon Code : </strong> $ReachUs->coupon_code</span></p>
            </div>
            <div class='col-md-6 float-left'>
                    <p><span  style='word-break: break-all;'><strong>purpose_of_enquery : </strong> $ReachUs->purpose_of_enquery</span></p>
            </div>";
        }
        return $div;
    }

    public function delete($id){
        ReachUs::where('id', $id)->delete();
        return true;
    }
}