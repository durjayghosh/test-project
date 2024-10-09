<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\ProductService as Service;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('admin.product.index');
    }

    public function indexList(Request $request)
    {
        return $this->service->indexList($request);
    }

    public function add(Request $request)
    {
        $result = $this->service->addOne();
        return view('admin.product.create', compact('result'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => ['required'],
            'category_id' => ['required'],
            'order_by' => 'required',
            'image' => ['nullable', 'mimes:png,jpg,jpeg,webp'],
        ], ['category_id.required' => 'The category field is required.']);
        $result = $this->service->update($request);
        return redirect()->back()->withSuccess("Product Created Successfully!");
    }

    public function edit(Request $request, $id)
    {
        $result = $this->service->editOne($id);
        return view('admin.product.edit', $result);
    }

    public function update(Request $request)
    {
        $request->validate([
            'product_name' => ['required'],
            'order_by' => 'required',
            'image' => ['nullable', 'mimes:png,jpg,jpeg,webp'],
            'image_title' => ['nullable']

        ]);
        $result = $this->service->update($request);
        return redirect()->back()->withSuccess("Product Update Successfully!");
    }
    public function productDelete(Request $request, $id)
    {
        $result = $this->service->productDeleteOne($id);
        return redirect()->back()->withSuccess("Product deleted Successfully!");
    }
    public function deleteGallery(Request $request)
    {
        $result = $this->service->deleteGalleryOne($request->deleteId);
        return response('success');
    }

    public function howDoesItWork(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'youtube.*' => ['nullable', 'regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
                'image.*' => 'required'
            ], ['youtube.*' => 'The youtube is not a valid URL.']);

            if ($request->ajax()) {
                if ($validator->fails()) {
                    return response(['status' => 'error', 'message' => $validator->messages()]);
                }
                $result = $this->service->howDoesItWorkPost($request, $id);
                return response(['status' => 'success', 'success' => 'How Does Work Update Succesfully!']);
            }
        } else {
            $result = $this->service->howDoesItWorkGet($request, $id);
            return view('admin.product.work', compact('result', 'id'));
        }
        return redirect()->back()->withSuccess("Product Update Successfully!");
    }

    public function howDoesItWorkDelete(Request $request)
    {
        $this->service->howDoesItWorkDelete($request->deleteId);
        return response(['status' => 'success', 'success' => 'Delete Succesfully!']);
    }
}