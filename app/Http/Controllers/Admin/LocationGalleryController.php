<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\LocationGalleryService as Service;

class LocationGalleryController extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        return view('admin.location_gallery.index');
    }

    public function indexList(Request $request)
    {
        return $this->service->indexList($request);
    }

    public function add(Request $request)
    {
        return view('admin.location_gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'location' => ['required'],
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);
        $result = $this->service->insert($request);
        return redirect()->back()->withSuccess("Location Gallery Created Successfully");
    }

    public function edit(Request $request, $id)
    {
        $Galleries = $this->service->editOne($id);
        return view('admin.location_gallery.edit', compact('Galleries', 'id'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'location' => ['required'],
            'image' => 'nullable|mimes:png,jpg,jpeg,webp'
        ]);
        $result = $this->service->update($request);
        return redirect()->back()->withSuccess("Location Gallery Update Successfully!");
    }

    public function delete(Request $request, $id)
    {
        $this->service->deleteOne($id);
        return redirect()->back()->withSuccess("Location Gallery deleted successfully");
    }
}