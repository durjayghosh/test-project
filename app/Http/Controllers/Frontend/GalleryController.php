<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Gallery, PageSection, GalleryCategory, Page};

class GalleryController extends Controller
{
    public function index(Request $request){
        $PageSections = PageSection::where('page_id', 6)->with('sectionList')->get();
        $Page = Page::where('id', 6)->first();
        $GalleryCategory = GalleryCategory::with('gallery')->whereHas('gallery')->get();
        return view('frontend.gallery', compact('PageSections', 'GalleryCategory', 'Page'));
    }
}
