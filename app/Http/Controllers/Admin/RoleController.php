<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\RoleStoreRequest;
use App\Http\Requests\Admin\RoleUpdateRequest;
use App\Http\Services\RoleService as Service;

class RoleController extends Controller
{
    protected $service;

    public function __construct(Service $service) {
        $this->service = $service;
    }
    public function index()
    {
        return view('admin.role.index');
    }
    // Get a customer list in the datatable
    public function indexList(Request $request){
        return $this->service->indexList($request);
    }

    public function add()
    {
        $result = $this->service->add();
        return view('admin.role.create', $result);
    }

    //store restaurant
    public function store(RoleStoreRequest $request){
        $this->service->insert($request);
        return redirect()->back()->withSuccess("Role created successfully");
    }

     //Edit a restaurant
     public function edit(Request $request, $id){
        $result = $this->service->getOne($id);
        $role = $result['role'];
        $menu = $result['menu'];
        $menu_permission = $result['menu_permission'];
        return view('admin.role.edit', compact('role', 'menu', 'menu_permission'));
    }
    //update restaurant
    public function update(RoleUpdateRequest $request){
        // dd($request->all());
        $this->service->update($request);
        return redirect()->back()->withSuccess("Role updated successfully");
    }
    //delete restaurant
    public function delete(Request $request, $id){
        $this->service->deleteOne($id);
        return redirect()->back()->withSuccess("Role deleted successfully");
    }
}
