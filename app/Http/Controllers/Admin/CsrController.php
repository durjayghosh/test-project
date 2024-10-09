<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\CsrService as Service;

class CsrController extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        return view('admin.csr.index');
    }

    public function indexList(Request $request)
    {
        return $this->service->indexList($request);
    }

    public function add(Request $request)
    {
        return view('admin.csr.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => ['required'],
            'designation' => ['required'],
            'image' => 'required|mimes:png,jpg,jpeg',
            'logo' => 'required|mimes:png,jpg,jpeg'
        ]);
        $result = $this->service->storeUpdate($request);
        return redirect()->back()->withSuccess("CSR Created Successfully");
    }

    public function edit(Request $request, $id)
    {
        $Csrs = $this->service->editOne($id);
        return view('admin.csr.edit', compact('Csrs', 'id'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'full_name' => ['required'],
            'designation' => ['required'],
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'logo' => 'nullable|mimes:png,jpg,jpeg'
        ]);
        $result = $this->service->storeUpdate($request);
        return redirect()->back()->withSuccess("CSR Update Successfully!");
    }

    public function delete(Request $request, $id)
    {
        $this->service->deleteOne($id);
        return redirect()->back()->withSuccess("CSR deleted successfully");
    }

    // Message From Ceo
    public function messageFromCeoIndex(Request $request)
    {
        return view('admin.csr.message_index');
    }

    public function messageFromCeoIndexList(Request $request)
    {
        return $this->service->messageFromCeoIndexList($request);
    }

    public function messageFromCeoIndexEdit(Request $request, $id)
    {
        $Csrs = $this->service->messageFromCeoIndexEditOne($id);
        return view('admin.csr.message_edit', compact('Csrs', 'id'));
    }

    public function messageFromCeoIndexListUpdate(Request $request)
    {
        $request->validate([
            'full_name' => ['required'],
            'designation' => ['required'],
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);
        $result = $this->service->messageFromCeoIndexListUpdate($request);
        return redirect()->back()->withSuccess("Message From CEO Update Successfully!");
    }
}