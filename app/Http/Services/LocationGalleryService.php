<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{LocationGallery};
use Illuminate\Support\Str;
use App\Http\DataTable\LocationGalleryDataTable as DataTable;
use Auth;
use Mail;
use DB;

class LocationGalleryService {

    public function __construct(
        DataTable $datatable,
        LocationGallery $LocationGallery
    ) {
        $this->datatable= $datatable;
        $this->LocationGallery= $LocationGallery;

    }

    //users list
    public function indexList(Request $request){
        return $this->datatable->indexList($request);
    }

    public function pageSectionList(Request $request){
        return $this->datatable->pageSectionList($request);
    }


    public function insert($request){
        $fileName = '';
        if($request->file('image')){
            $file = $request->file('image') ;
            $fileName = time().$file->getClientOriginalName() ;
            $destinationPath = '/home/wigomani/public_html/public/storage/gallery';
			
			//echo $destinationPath;die;
            //$destinationPath = '/home/wigomani/wigomaniacbe/public/storage/gallery';
            $file->move($destinationPath,$fileName);
            $fileName = $request->file('image') ? 'storage/gallery/'.$fileName : null;
        }

        $result = $this->LocationGallery->create([
            'location'=>$request->location,
            'image'=>$fileName,
            'image_title'=>$request->image_title,

        ]);

        return  $result;
    }

    public function deleteOne($id){
        $result = $this->LocationGallery->where('id', $id)->delete();
        return $result;
    }

    public function editOne($id){
        $Gallery = LocationGallery::where('id', $id)->first();
        return $result['Gallery'] = $Gallery;
    }

    public function update($request){
        $Gallery = LocationGallery::where('id', $request->id)->first();

        if($request->file('image')){
            $file = $request->file('image') ;
            $fileName = time().$file->getClientOriginalName() ;
            $destinationPath = storage_path().'/app/public/gallery';
            $file->move($destinationPath,$fileName);
            $Gallery->image = $request->file('image') ? 'storage/gallery/'.$fileName : null;
            $Gallery->image_title = $request->file('image_title') ? 'storage/gallery/'.$fileName : null;
            
        }

        $Gallery->location = $request->location;
        $Gallery->save();
        return true;
    }


}
