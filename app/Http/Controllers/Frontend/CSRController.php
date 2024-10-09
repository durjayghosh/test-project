<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{PageSection, Csr, MessageFromCeo, Page};

class CSRController extends Controller
{
    public function index(Request $request){
        $PageSections = PageSection::where('page_id', 4)->with('sectionList')->get();
        // dd($PageSections);
        $Page = Page::where('id', 4)->first();
        $Csrs = Csr::orderBy('id', 'asc')->limit(6)->get();
        $MessageFromCeo = MessageFromCeo::first();
        return view('frontend.csr', compact('PageSections', 'Csrs', 'MessageFromCeo', 'Page'));
    }
}
