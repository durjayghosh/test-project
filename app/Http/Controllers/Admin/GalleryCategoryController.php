<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\GalleryCategoryService as Service;

class GalleryCategoryController extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        return view('admin.gallery_category.index');
    }

    public function indexList(Request $request)
    {
        return $this->service->indexList($request);
    }

    public function add(Request $request)
    {
        return view('admin.gallery_category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => ['required', 'max:50']

        ]);
        $result = $this->service->insert($request);
        return redirect()->back()->withSuccess("Gallery Category Created Successfully");
    }

    public function edit(Request $request, $id)
    {
        $Galleries = $this->service->editOne($id);
        return view('admin.gallery_category.edit', compact('Galleries', 'id'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'category' => ['required']
        ]);
        $result = $this->service->update($request);
        return redirect()->back()->withSuccess("Gallery Category Update Successfully!");
    }

    public function delete(Request $request, $id)
    {
        $this->service->deleteOne($id);
        return redirect()->back()->withSuccess("Gallery Category deleted successfully");
    }
}