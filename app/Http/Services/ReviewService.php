<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{Review, PageSection, PageSetting, Product, ProductCategory};
use Illuminate\Support\Str;
use App\Http\DataTable\ReviewDataTable as DataTable;
use Auth;
use Mail;
use DB;

class ReviewService
{
    public function __construct(
        DataTable $datatable,
        Review $Review
    ) {
        $this->datatable = $datatable;
        $this->Review = $Review;
    }

    //users list
    public function indexList(Request $request)
    {

        return $this->datatable->indexList($request);
    }

    public function insert($request)
    {

        $result = $this->Review->create([
            'name' => $request->name,
            'rating' => $request->rating,
            'description' => $request->description,
            'review_date' => $request->review_date,
            'product_id' => $request->product,
            'is_verified' => $request->is_verified,
            'home_page' => $request->home_page


        ]);
        return $result;
    }

    public function editOne($id)
    {
        $Review = Review::where('id', $id)->first();
        return $result['Review'] = $Review;
    }

    public function update($request)
    {
        $Review = Review::where('id', $request->id)->first();
        $Review->name = $request->name;
        $Review->review_date = $request->review_date;
        $Review->description = $request->description;
        $Review->rating = $request->rating;
        $Review->product_id = $request->product;
        $Review->is_verified = $request->is_verified;
        $Review->home_page = $request->home_page;

        if ($Review->save()) {
            return true;
        }
    }

    public function deleteOne($id)
    {
        $result = $this->Review->where('id', $id)->delete();
        return $result;
    }

    public function product()
    {
        $products = ProductCategory::orderBy('category_name', 'asc')->get();
        return $products;
    }
}