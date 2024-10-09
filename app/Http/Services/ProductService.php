<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{Product, ProductCategory, ProductGallery, ProductWorkGallery};
use Illuminate\Support\Str;
use App\Http\DataTable\ProductDataTable as DataTable;
use Auth;
use Mail;
use DB;

class ProductService
{

    public function __construct(
        DataTable $datatable,
        Product $Product
    ) {
        $this->datatable = $datatable;
        $this->Product = $Product;

    }

    //users list
    public function indexList(Request $request)
    {
        return $this->datatable->indexList($request);
    }

    public function addOne()
    {
        $ProductCategory = ProductCategory::get();
        return $ProductCategory;
    }


    public function editOne($id)
    {
        $result['ProductCategory'] = ProductCategory::get();
        $result['Product'] = Product::with('galleries')->where('id', $id)->first();
        return $result;
    }

    public function update($request)
    {
        if (isset($request->id)) {
            $Product = Product::where('id', $request->id)->first();
        } else {
            $Product = new Product();
        }
        $Product->product_name = $request->product_name;
        $Product->slug = Str::slug($request->product_name);
        $Product->order_by = $request->order_by;
        $Product->category_id = $request->category_id;
        $Product->description = $request->description;

        $Product->save();

        $this->galleryUpdate(isset($request->id) ? $request->id : $Product->id, $request);
        return true;
    }


    public function galleryUpdate($ProductId, $request)
    {
        //dd($request->image_title);
        $keys = [];
        // if (isset($request->gallery) && count($request->gallery) > 0) {
        //     foreach ($request->gallery as $key => $gallery) {
        //         if (isset($request->gallery_id) && isset($request->gallery_id[$key])) {
        //             $ProductGallery = ProductGallery::where('id', $request->gallery_id[$key])->first();
        //         } else {
        //             $ProductGallery = new ProductGallery();
        //         }
        //         $ProductGallery->product_id = $ProductId;
        //         if (isset($request->file('gallery')[$key])) {
        //             $file = $request->file('gallery')[$key];  
        //             $fileName = time() . $file->getClientOriginalName();
        //             $destinationPath = storage_path() . '/app/public/gallery';
        //             $file->move($destinationPath, $fileName);
        //             $ProductGallery->gallery = $request->file('gallery') ? 'storage/gallery/' . $fileName : null;
                    
        //         }
        //         $ProductGallery->save();
        //     }
        // }
        if (isset($request->image_title) && count($request->image_title) > 0) {
            
            foreach ($request->image_title as $key => $image_title) {
                if (isset($request->gallery_id) && isset($request->gallery_id[$key])) {
                    $ProductGallery = ProductGallery::where('id', $request->gallery_id[$key])->first();
                } else {
                    $ProductGallery = new ProductGallery();
                }
                $ProductGallery->product_id = $ProductId;
                if (isset($request->file('gallery')[$key])) {
                    $file = $request->file('gallery')[$key];  
                    $fileName = time() . $file->getClientOriginalName();
                    $destinationPath = public_path('storage/gallery');
                    $file->move($destinationPath, $fileName);
                    $ProductGallery->gallery = $request->file('gallery') ? 'storage/gallery/' . $fileName : null;
                    
                }
                $ProductGallery->image_title=$request->image_title[$key];
                //dd($ProductGallery);
                $ProductGallery->save();
            }
        }
        return true;
    }
    public function productDeleteOne($id)
    {
        // $result = $this->product->where('id', $id)->delete();
        return Product::where('id', $id)->delete();
    }

    public function deleteGalleryOne($id)
    {
        return ProductGallery::where('id', $id)->delete();
    }

    public function howDoesItWorkGet($request, $id)
    {
        $ProductWorkGallery = ProductWorkGallery::where('product_id', $id)->get();
        // dd($ProductWorkGallery);
        return $ProductWorkGallery;
    }

    public function howDoesItWorkPost($request, $id)
    {
        if (isset($request->youtube) && count($request->youtube) > 0) {
            foreach ($request->youtube as $key => $gallery) {
                if (isset($request->gallery_id) && isset($request->gallery_id[$key])) {
                    $ProductWorkGallery = ProductWorkGallery::where('id', $request->gallery_id[$key])->first();
                } else {
                    $ProductWorkGallery = new ProductWorkGallery();
                }
                $ProductWorkGallery->product_id = $id;
                if (isset($request->file('image')[$key])) {
                    $file = $request->file('image')[$key];
                    $fileName = time() . $file->getClientOriginalName();
                    $destinationPath = storage_path() . '/app/public/gallery';
                    $file->move($destinationPath, $fileName);
                    $ProductWorkGallery->image = $request->file('image') ? 'storage/gallery/' . $fileName : null;
                }
                $ProductWorkGallery->youtube = $request->youtube[$key];
                $ProductWorkGallery->save();
            }
        }
        return 1;

    }

    public function howDoesItWorkDelete($id)
    {
        ProductWorkGallery::where('id', $id)->delete();
        return 1;
    }
}