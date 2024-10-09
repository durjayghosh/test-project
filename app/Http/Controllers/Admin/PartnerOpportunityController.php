<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\PartnerOpportunityService as Service;

class PartnerOpportunityController extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        return view('admin.partner_opportunity.index');
    }

    public function indexList(Request $request)
    {
        return $this->service->indexList($request);
    }

    public function add(Request $request)
    {
        return view('admin.partner_opportunity.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'opportunity' => ['required']
        ]);
        $result = $this->service->storeUpdate($request);
        return redirect()->back()->withSuccess("Partner Opportunity Created Successfully");
    }

    public function edit(Request $request, $id)
    {
        $OurTeams = $this->service->editOne($id);
        return view('admin.partner_opportunity.edit', compact('OurTeams', 'id'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'opportunity' => ['required']
        ]);
        $result = $this->service->storeUpdate($request);
        return redirect()->back()->withSuccess("Partner Opportunity Update Successfully!");
    }

    public function delete(Request $request, $id)
    {
        $this->service->deleteOne($id);
        return redirect()->back()->withSuccess("Partner Opportunity deleted successfully");
    }
}