<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Services\GalleryService as Service;
use App\Http\Services\GalleryService as Service;

class GalleryController extends Controller
{
    protected $service;

    public function __construct(Service $service) {
        $this->service = $service;
    }

    public function index(Request $request) {
        return view('admin.gallery.index');
    }

    public function indexList(Request $request){
        return $this->service->indexList($request);
    }

    public function add(Request $request){
        $Categories = $this->service->category();
        return view('admin.gallery.create', compact('Categories'));
    }

    public function store(Request $request){
        $request->validate([
            'category_id' => ['required'],
            // 'sub_heading' => ['required'],
            "youtube" => ['required','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
            "image" => 'required|mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048',
        ]);
        $result = $this->service->update($request);
        return redirect()->back()->withSuccess("Gallery Created Successfully");
    }

    public function edit(Request $request, $id){
        $Categories = $this->service->category();
        $Galleries = $this->service->editOne($id);
        return view('admin.gallery.edit', compact('Galleries', 'Categories'));
    }

    public function update(Request $request){
        $request->validate([
            'category_id' => ['required'],
            // 'sub_heading' => ['required'],
            "youtube" => ['nullable','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
            "image" => 'nullable|mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048',
        ]);
        $result = $this->service->update($request);
        return redirect()->back()->withSuccess("Gallery Update Successfully!");
    }

    public function delete(Request $request, $id){
        $this->service->deleteOne($id);
        return redirect()->back()->withSuccess("Gallery deleted successfully");
    }
}
