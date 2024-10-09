<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{Csr, MessageFromCeo};
use Illuminate\Support\Str;
use App\Http\DataTable\CsrDataTable as DataTable;
use Auth;
use Mail;
use DB;

class CsrService {

    public function __construct(
        DataTable $datatable,
        Csr $Csr
    ) {
        $this->datatable= $datatable;
        $this->Csr= $Csr;
    }

    public function indexList(Request $request){
        return $this->datatable->indexList($request);
    }

    public function deleteOne($id){
        $result = $this->Csr->where('id', $id)->delete();
        return $result;
    }

    public function editOne($id){
        $Csrs = Csr::where('id', $id)->first();
        return $result['Csrs'] = $Csrs;
    }

    public function storeUpdate($request){
        if(isset($request->id)){
            $Csr = Csr::where('id', $request->id)->first();
        }else{
            $Csr = new Csr();
        }

        if($request->file('image')){
            $file = $request->file('image') ;
            $fileName = time().$file->getClientOriginalName() ;
            $destinationPath = storage_path().'/app/public/csr';
            $file->move($destinationPath,$fileName);
            $Csr->image = $request->file('image') ? 'storage/csr/'.$fileName : null;
        }

        if($request->file('logo')){
            $file = $request->file('logo') ;
            $fileName = time().$file->getClientOriginalName() ;
            $destinationPath = storage_path().'/app/public/csr';
            $file->move($destinationPath,$fileName);
            $Csr->logo = $request->file('logo') ? 'storage/csr/'.$fileName : null;
        }

        $Csr->full_name = $request->full_name;
        $Csr->designation = $request->designation;
        $Csr->about = $request->about;
        $Csr->image_title = $request->image_title;

        $Csr->save();
        return true;
    }

    // Message From Ceo

    public function messageFromCeoIndexList(Request $request){
        return $this->datatable->messageFromCeoIndexList($request);
    }

    public function messageFromCeoIndexEditOne($id){
        $Csrs = MessageFromCeo::where('id', $id)->first();
        return $result['Csrs'] = $Csrs;
    }

    public function messageFromCeoIndexListUpdate($request){
        $Csr = MessageFromCeo::where('id', $request->id)->first();

        if($request->file('image')){
            $file = $request->file('image') ;
            $fileName = time().$file->getClientOriginalName() ;
            $destinationPath = storage_path().'/app/public/csr';
            $file->move($destinationPath,$fileName);
            $Csr->image = $request->file('image') ? 'storage/csr/'.$fileName : null;
        }
        $Csr->full_name = $request->full_name;
        $Csr->designation = $request->designation;
        $Csr->message = $request->message;
        $Csr->image_title = $request->image_title;

        $Csr->save();
        return true;
    }

}
