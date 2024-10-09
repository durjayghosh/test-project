<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\OurTeamService as Service;

class OurTeamController extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        return view('admin.ourteam.index');
    }

    public function indexList(Request $request)
    {
        return $this->service->indexList($request);
    }

    public function add(Request $request)
    {
        return view('admin.ourteam.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => ['required'],
            'designation' => ['required'],
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);
        $result = $this->service->storeUpdate($request);
        return redirect()->back()->withSuccess("Our team Created Successfully");
    }

    public function edit(Request $request, $id)
    {
        $OurTeams = $this->service->editOne($id);
        return view('admin.ourteam.edit', compact('OurTeams', 'id'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'full_name' => ['required'],
            'designation' => ['required'],
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);
        $result = $this->service->storeUpdate($request);
        return redirect()->back()->withSuccess("Our team Update Successfully!");
    }

    public function delete(Request $request, $id)
    {
        $this->service->deleteOne($id);
        return redirect()->back()->withSuccess("Our team deleted successfully");
    }
}