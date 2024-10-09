<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{OurTeam};
use Illuminate\Support\Str;
use App\Http\DataTable\OurTeamDataTable as DataTable;
use Auth;
use Mail;
use DB;

class OurTeamService {

    public function __construct(
        DataTable $datatable,
        OurTeam $OurTeam
    ) {
        $this->datatable= $datatable;
        $this->OurTeam= $OurTeam;

    }

    //users list
    public function indexList(Request $request){
        return $this->datatable->indexList($request);
    }

    public function pageSectionList(Request $request){
        return $this->datatable->pageSectionList($request);
    }

    public function deleteOne($id){
        $result = $this->OurTeam->where('id', $id)->delete();
        return $result;
    }

    public function editOne($id){
        $OurTeams = OurTeam::where('id', $id)->first();
        return $result['OurTeams'] = $OurTeams;
    }

    public function storeUpdate($request){
        if(isset($request->id)){
            $OurTeam = OurTeam::where('id', $request->id)->first();
        }else{
            $OurTeam = new OurTeam();
        }
        if($request->file('image')){
            $file = $request->file('image') ;
            $fileName = time().$file->getClientOriginalName() ;
            $destinationPath = storage_path().'/app/public/our-team';
            $file->move($destinationPath,$fileName);
            $OurTeam->image = $request->file('image') ? 'storage/our-team/'.$fileName : null;
        }
        $OurTeam->full_name = $request->full_name;
        $OurTeam->designation = $request->designation;
        $OurTeam->about = $request->about;
        $OurTeam->save();
        return true;
    }


}
