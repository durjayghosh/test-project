<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\ReviewService as Service;


class ReviewController extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        return view('admin.review.index');
    }

    public function indexList(Request $request)
    {
        return $this->service->indexList($request);
    }

    public function add(Request $request)
    {
        $products = $this->service->product();
        return view('admin.review.create', compact('products'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            // 'product' => ['required'],
            'description' => ['required'],
            'rating' => ['required', 'integer', 'max:5', 'min:1'],
            'product' => 'required'
        ]);
        $result = $this->service->insert($request);
        return redirect()->back()->withSuccess("Review Created Successfully");
    }

    public function edit(Request $request, $id)
    {
        $result = $this->service->editOne($id);
        $products = $this->service->product();
        return view('admin.review.edit', compact('result', 'id', 'products'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            // 'email' => ['required', 'email'],
            'description' => ['required'],
            'rating' => ['required', 'integer', 'max:5', 'min:1'],
            'product' => 'required'
        ]);
        $result = $this->service->update($request);
        return redirect()->back()->withSuccess("Review Update Successfully!");
    }

    public function delete(Request $request, $id)
    {
        $this->service->deleteOne($id);
        return redirect()->back()->withSuccess("Review deleted successfully");
    }
}