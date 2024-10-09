<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{FranchiseFinancial};
use Illuminate\Support\Str;
use App\Http\DataTable\FinancialDataTable as DataTable;
use Auth;
use Mail;
use DB;

class FinancialService {
    public function __construct(
        DataTable $datatable,
        FranchiseFinancial $FranchiseFinancial
    ) {
        $this->datatable= $datatable;
        $this->FranchiseFinancial = $FranchiseFinancial;
    }

    //users list
    public function indexList(Request $request){
        return $this->datatable->indexList($request);
    }

    public function show($request, $id){
        $FranchiseFinancial = FranchiseFinancial::where('id', $id)->first();
        $div = '';
        if($FranchiseFinancial){
            $div = "<div class='col-md-6 float-left'>
            <p><span style='word-break: break-all;'><strong>Name : </strong> $FranchiseFinancial->full_name</span></p>
            </div>
            <div class='col-md-6 float-left'>
                    <p><span  style='word-break: break-all;'><strong>Email : </strong> $FranchiseFinancial->email</span></p>
            </div>

            <div class='col-md-6 float-left'>
                    <p><span style='word-break: break-all;'><strong>Contact Number : </strong> $FranchiseFinancial->contact_number</span></p>
            </div>
            <div class='col-md-6 float-left'>
                    <p><span  style='word-break: break-all;'><strong>Qualification : </strong> $FranchiseFinancial->qualification</span></p>
            </div>

            <div class='col-md-12 float-left'>
                    <p><span  style='word-break: break-all;'><strong>Management Experirnce : </strong>  $FranchiseFinancial->management_experirnce</span></p>
            </div>
            <div class='col-md-12 float-left'>
                    <p><span  style='word-break: break-all;'><strong>Achivements : </strong>  $FranchiseFinancial->achivements</span></p>
            </div>
            <div class='col-md-12 float-left'>
                <p><span  style='word-break: break-all;'><strong>Why Wigomania : </strong>  $FranchiseFinancial->why_wigomania</span></p>
            </div>
            <div class='col-md-12 float-left'>
                    <p><span  style='word-break: break-all;'><strong>Do You Belve You Have What It Takes : </strong>  $FranchiseFinancial->believe </span></p>
            </div>";
        }
        return $div;
    }

    public function delete($id){
        FranchiseFinancial::where('id', $id)->delete();
        return true;
    }
}
