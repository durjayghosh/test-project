<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{Gallery, GalleryCategory};
use Illuminate\Support\Str;
use App\Http\DataTable\GalleryDataTable as DataTable;
use Auth;
use Mail;
use DB;

class GalleryService {

    public function __construct(
        DataTable $datatable,
        Gallery $Gallery
    ) {
        $this->datatable= $datatable;
        $this->Gallery= $Gallery;
    }

    //users list
    public function indexList(Request $request){
        return $this->datatable->indexList($request);
    }

    public function deleteOne($id){
        $result = $this->Gallery->where('id', $id)->delete();
        return $result;
    }

    public function editOne($id){
        $Gallery = Gallery::where('id', $id)->first();
        return $result['Gallery'] = $Gallery;
    }

    public function update($request){
        if(isset($request->id)){
            $Gallery = Gallery::where('id', $request->id)->first();
        }else{
            $Gallery = new Gallery();
        }

        $Gallery->category_id = $request->category_id;
        $Gallery->heading = ucwords($request->heading);
        $Gallery->sub_heading = ucwords($request->sub_heading);
        $Gallery->description = $request->description;
        $Gallery->youtube = $request->youtube;
        $Gallery->youtube_description = $request->youtube_description;

        if($request->file('image')){
            $file = $request->file('image') ;
            $fileName = time().$file->getClientOriginalName() ;
            $destinationPath = storage_path().'/app/public/gallery';
            $file->move($destinationPath,$fileName);
            $Gallery->image = $request->file('image') ? 'storage/gallery/'.$fileName : null;
        }
        $Gallery->save();
        return true;
    }

    public function category(){
        $GalleryCategory = GalleryCategory::get();
        return $GalleryCategory;
    }
}
