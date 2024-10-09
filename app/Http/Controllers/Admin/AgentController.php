<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AgentStoreRequest;
use App\Http\Requests\Admin\AgentUpdateRequest;
use App\Http\Services\AgentService as Service;
use Auth;



class AgentController extends Controller
{
    protected $service;

    public function __construct(Service $service) {
        $this->service = $service;
    }
    public function index()
    {
        return view('admin.agent.index');
    }
    // Get a customer list in the datatable
    public function indexList(Request $request){
        return $this->service->indexList($request);
    }

    public function add()
    {
        $result = $this->service->add();
        return view('admin.agent.create', $result);
    }

    //store restaurant
    public function store(AgentStoreRequest $request){
        $this->service->insert($request);
        return redirect()->back()->withSuccess("Agent created successfully");
    }

    //Edit a restaurant
    public function edit(Request $request, $id){
        $result = $this->service->getOne($id);
        $agent = $result['user'];
        $Role = $result['Role'];
        return view('admin.agent.edit', compact('agent', 'Role'));
    }
    //update restaurant
    public function update(AgentUpdateRequest $request){
        $this->service->update($request);
        return redirect()->back()->withSuccess("Agent updated successfully");
    }
    //delete restaurant
    public function delete(Request $request, $id){
        $this->service->deleteOne($id);
        return redirect()->back()->withSuccess("Agent deleted successfully");
    }

}
