<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{OurTeam, PageSection, Page};

class BehindTheBrandController extends Controller
{
    public function index(Request $request){
        $PageSections = PageSection::where('page_id', 2)->with('sectionList')->get();
        // $OurTeams = OurTeam::orderBy('id', 'desc')->limit(6)->get();
        $Page = Page::where('id', 2)->first();
        return view('frontend.behind_the_brand', compact('PageSections', 'Page'));
    }

    public function behindTheBrandFamily(Request $request){
        $PageSections = PageSection::where('page_id', 3)->with('sectionList')->get();
        // dd($PageSections);
        $Page = Page::where('id', 3)->first();
        $OurTeams = OurTeam::orderBy('id', 'desc')->limit(6)->get();
        return view('frontend.behind_the_brand_family', compact('OurTeams', 'PageSections', 'Page'));
    }
}
