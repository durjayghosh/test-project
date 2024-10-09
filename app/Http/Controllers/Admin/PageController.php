<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\PageService as Service;

class PageController extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('admin.cms.pages.index');
    }

    public function indexList(Request $request)
    {
        return $this->service->indexList($request);
    }

    public function pageSection(Request $request, $id)
    {
        return view('admin.cms.pages.page_section', compact('id'));
    }

    public function pageSectionList(Request $request, $id)
    {
        return $this->service->pageSectionList($request, $id);
    }

    public function edit(Request $request, $id)
    {
        $result = $this->service->editOne($id);
        if ($result->section == 'Slider') {
            return view('admin.cms.pages.edit_slider', compact('result', 'id'));
        }
        return view('admin.cms.pages.edit', compact('result', 'id'));
    }

    public function update(Request $request)
    {
		//echo '<pre>';print_r($request);die;
		if($request->section_id!=26)
		{
			$request->validate([
				'heading_title' => ['required'],
				'heading' => ['required'],
				'email' => ['nullable', 'email'],
				'phone' => ['nullable', 'numeric', 'digits:10'],
				"youtube" => ['nullable', 'regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
				"facebook" => ['nullable', 'regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
				"instagram" => ['nullable', 'regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
				"twitter" => ['nullable', 'regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
			]);
		}
        
        $result = $this->service->update($request);
        return redirect()->back()->withSuccess("Section Update Successfully!");
    }

    public function updateSlider(Request $request)
    {
        // $request->validate([
        //     '*.heading' =>'required|array',
        // ]);
        $result = $this->service->updateSlider($request);
        return redirect()->back()->withSuccess("Section Update Successfully!");
    }

    public function metaTag(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $result = $this->service->metaTagPost($request, $id);
            return response(['status' => 'success', 'message' => 'Page detail update successfully!']);
        }
        $result = $this->service->metaTagGet($request, $id);
        return response(['status' => 'success', 'data' => $result]);
    }
}