<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{ProductCategory, ProductGallery};
use Illuminate\Support\Str;
use App\Http\DataTable\ProductCategoryDataTable as DataTable;
use Auth;
use Mail;
use DB;

class ProductCategoryService {

    public function __construct(
        DataTable $datatable,
        ProductCategory $ProductCategory
    ) {
        $this->datatable= $datatable;
        $this->ProductCategory= $ProductCategory;

    }

    //users list
    public function indexList(Request $request){
        return $this->datatable->indexList($request);
    }

    public function editOne($id){
        $ProductCategory = ProductCategory::where('id', $id)->first();
        return $ProductCategory;
    }

    public function update($request){
        $ProductCategory = ProductCategory::where('id', $request->id)->first();
        if($request->file('image')){
            $file = $request->file('image') ;
            $fileName = time().$file->getClientOriginalName() ;
            //$destinationPath = storage_path().'/app/public/product';
            $destinationPath = public_path('storage/product');
            $file->move($destinationPath,$fileName);
            $ProductCategory->image = $request->file('image') ? 'storage/product/'.$fileName : null;
        }

        if($request->file('sub_image')){
            $file = $request->file('sub_image') ;
            $fileName = 'sub_'.time().$file->getClientOriginalName() ;
            //$destinationPath = storage_path().'/app/public/product';
			$destinationPath = public_path('storage/product');
            $file->move($destinationPath,$fileName);
            $ProductCategory->sub_image = $request->file('sub_image') ? 'storage/product/'.$fileName : null;
        }
        $ProductCategory->category_name = $request->category_name;
        $ProductCategory->slug = Str::slug($request->category_name);
        $ProductCategory->title = $request->title;
        $ProductCategory->description = $request->description;
        $ProductCategory->meta_heading = $request->meta_heading;
        $ProductCategory->meta_title = $request->meta_title;
        $ProductCategory->meta_description = $request->meta_description;
        $ProductCategory->meta_keywords = $request->meta_keywords;
        $ProductCategory->alt_image = $request->alt_image;
        $ProductCategory->alt_sub_image = $request->alt_sub_image;
        
        $ProductCategory->save();
        // $this->galleryUpdate($request->id, $request);
        return true;
    }

    public function galleryUpdate($ProductId, $request){
        $keys = [];
        if(isset($request->gallery) && count($request->gallery) > 0){
            foreach($request->gallery as $key  => $gallery){
                if(isset($request->gallery_id) && isset($request->gallery_id[$key])){
                    $ProductGallery = ProductGallery::where('id', $request->gallery_id[$key])->first();
                }else{
                    $ProductGallery = new ProductGallery ();
                }
                $ProductGallery->product_id = $ProductId;
                if(isset($request->file('gallery')[$key])){
                    $file = $request->file('gallery')[$key] ;
                    $fileName = time().$file->getClientOriginalName() ;
                    //$destinationPath = storage_path().'/app/public/gallery';
                    $destinationPath = public_path('storage/gallery');
                    $file->move($destinationPath,$fileName);
                    $ProductGallery->gallery = $request->file('gallery') ? 'storage/gallery/'.$fileName : null;
                }
                $ProductGallery->save();
            }
        }
        return true;
    }

    public function deleteGalleryOne($id){
        return ProductGallery::where('id', $id)->delete();
    }
}
