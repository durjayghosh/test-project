<?php

namespace App\Http\Controllers;

use App\Models\{Blog,
    PageSection,
    BookAnAppointment,
    Review,
    LocationGallery,
    ProductCategory,
    Page,
    Visiter,
    PageSetting,
    Reviews,
    ProductGallery};
use Illuminate\Support\Facades\Validator;
Use Mail;
Use DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        app('mathcaptcha')->reset();

        $PageSections = PageSection::where('page_id', 1)->with('sectionList')->get();
        $Reviews = Review::limit(9)->where('home_page', 1)->orderBy('review_date', 'desc')->get();
        if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            //$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $ip = $_SERVER['REMOTE_ADDR'];
        $location = '';//$ipDetails->city . ', ' . $ipDetails->regionName . ', ' . $ipDetails->country;
        Visiter::create(['ip_address' => $ip, 'location' => $location, 'visitDate' => date('Y-m-d'), 'visitDatetime' => date('Y-m-d H:i:s')]);

        $blogs = Blog::where('status',1)->with('category')->latest()->get();

        return view('frontend.blog.index',compact('PageSections', 'Reviews','blogs'));
    }
}
