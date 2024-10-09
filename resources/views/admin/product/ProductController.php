<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ProductCategory, Review, ProductGallery};

class ProductController extends Controller
{
    public function index(Request $request, $slug)
    {
        app('mathcaptcha')->reset();
        $Products = ProductCategory::with([
            'products' => function ($query) {
                $query->orderBy('order_by', 'DESC');
            }
        ])->where('slug', $slug)->first();
        $Products = ProductCategory::with('products')->where('slug', $slug)->first();
        $Reviews = Review::where('product_id', $Products->id)->where('is_verified', 1)->get();
        $Page = ProductCategory::with('products')->where('slug', $slug)->select('product_categories.meta_heading as title', 'product_categories.meta_title as meta_title', 'product_categories.meta_description', 'product_categories.meta_keywords as meta_keyword')->first();
        return view('frontend.product', compact('Products', 'Reviews', 'Page'));
    }

}