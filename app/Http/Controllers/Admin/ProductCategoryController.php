<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\ProductCategoryService as Service;

class ProductCategoryController extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('admin.product_category.index');
    }

    public function indexList(Request $request)
    {
        return $this->service->indexList($request);
    }

    public function edit(Request $request, $id)
    {
        $result = $this->service->editOne($id);
        return view('admin.product_category.edit', compact('result'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'category_name' => ['required'],
            'image' => ['nullable', 'mimes:png,jpg,jpeg,webp'],
            'sub_image' => ['nullable', 'mimes:png,jpg,jpeg,webp'],
        ]);
        $result = $this->service->update($request);
        return redirect()->back()->withSuccess("Product Category Update Successfully!");
    }

    public function deleteGallery(Request $request)
    {
        $result = $this->service->deleteGalleryOne($request->deleteId);
        return response('success');
    }
}