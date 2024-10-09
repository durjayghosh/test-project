<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{PartnerOpportunity};
use Illuminate\Support\Str;
use App\Http\DataTable\PartnerOpportunityDataTable as DataTable;
use Auth;
use Mail;
use DB;

class PartnerOpportunityService {

    public function __construct(
        DataTable $datatable,
        PartnerOpportunity $PartnerOpportunity
    ) {
        $this->datatable= $datatable;
        $this->PartnerOpportunity= $PartnerOpportunity;

    }

    //users list
    public function indexList(Request $request){
        return $this->datatable->indexList($request);
    }

    public function pageSectionList(Request $request){
        return $this->datatable->pageSectionList($request);
    }

    public function deleteOne($id){
        $result = $this->PartnerOpportunity->where('id', $id)->delete();
        return $result;
    }

    public function editOne($id){
        $PartnerOpportunitys = PartnerOpportunity::where('id', $id)->first();
        return $result['PartnerOpportunitys'] = $PartnerOpportunitys;
    }

    public function storeUpdate($request){
        if(isset($request->id)){
            $PartnerOpportunity = PartnerOpportunity::where('id', $request->id)->first();
        }else{
            $PartnerOpportunity = new PartnerOpportunity();
        }

        $PartnerOpportunity->opportunity = $request->opportunity;
        $PartnerOpportunity->slug = Str::slug($request->opportunity);
        $PartnerOpportunity->about = $request->about;
        $PartnerOpportunity->save();
        return true;
    }


}
