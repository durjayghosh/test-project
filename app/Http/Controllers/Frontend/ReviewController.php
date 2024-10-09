<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Review, PageSection, ReviewIndex, Page};

class ReviewController extends Controller
{
    public function index(Request $request){
        app('mathcaptcha')->reset();
        $Reviews = Review::limit(9)->orderBy('review_date', 'desc')->paginate(9);
        $PageSections = PageSection::where('page_id', 7)->with('sectionList')->get();
        $Page = Page::where('id', 7)->first();
        return view('frontend.review', compact('Reviews', 'PageSections', 'Page'));
    }

    public function customerReview(Request $request){
        $PageSections = PageSection::where('page_id', 9)->with('sectionList')->get();

        // $sql = ReviewIndex::all();
        // // $root = '/home/wigomani/public_html';
        // $REVPATH = public_path('frontend/customer-reviews/REV/');
        // $DATA = $REVPATH . 'indexName.json';
        // $dir = public_path('frontend/customer-reviews/REV/new');

        // $ALLFloders = array();

        // $REVIEWS = array();

        // $Weburl = $REVPATH . 'new';
        // // dd($dir);

        // $ffs = scandir($dir);
        // unset($ffs[array_search('.', $ffs, true)]);
        // unset($ffs[array_search('..', $ffs, true)]);

        // if (count($ffs) < 1) {
        //     return 0;
        // }
        // foreach ($ffs as $ff) {
        //     $ALLFloders[] = $ff;
        // }
        // $removed = array_pop($ALLFloders);
        // foreach ($ALLFloders as $SubFolder) {
        //     if ($SubFolder <= 2) {
        //         $filePAth = $dir . '/' . $SubFolder . '/audio.m4a';
        //         if (file_exists($filePAth)) {
        //             $REVIEWS[$SubFolder]['audio'] = $Weburl . '/' . $SubFolder . '/audio.m4a';
        //         }
        //         $REVIEWS[$SubFolder]['img'] = $Weburl . '/' . $SubFolder . '/img.jpg';
        //         $REVIEWS[$SubFolder]['meta'] = $Weburl . '/' . $SubFolder . '/meta.json';
        //     }
        // }
        // $TotalPages = count($ALLFloders);

        // $TotalPages = $TotalPages * 2 + 2;
        // return view('frontend.customer_review', compact('PageSections', 'sql', 'TotalPages', 'removed', 'DATA'));
        return view('frontend.customer_review', compact('PageSections'));
    }
}