<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{GalleryCategory};
use Illuminate\Support\Str;
use App\Http\DataTable\GalleryCategoryDataTable as DataTable;
use Auth;
use Mail;
use DB;

class GalleryCategoryService {

    public function __construct(
        DataTable $datatable,
        GalleryCategory $GalleryCategory
    ) {
        $this->datatable= $datatable;
        $this->GalleryCategory= $GalleryCategory;

    }

    //users list
    public function indexList(Request $request){
        return $this->datatable->indexList($request);
    }

    public function pageSectionList(Request $request){
        return $this->datatable->pageSectionList($request);
    }

    public function insert($request){
        $result = $this->GalleryCategory->create([
            'category'=> ucwords($request->category),
            'slug'=> Str::slug($request->category),

        ]);
        return  $result;
    }

    public function deleteOne($id){
        $result = $this->GalleryCategory->where('id', $id)->delete();
        return $result;
    }

    public function editOne($id){
        $Gallery = GalleryCategory::where('id', $id)->first();
        return $result['Gallery'] = $Gallery;
    }

    public function update($request){
        $Gallery = GalleryCategory::where('id', $request->id)->first();
        $Gallery->category = ucwords($request->category);
        $Gallery->slug = Str::slug($request->category);
        $Gallery->save();
        return true;
    }
}
