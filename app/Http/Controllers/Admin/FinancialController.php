<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\FinancialService as Service;

class FinancialController extends Controller
{
    protected $service;

    public function __construct(Service $service) {
        $this->service = $service;
    }

    public function index(Request $request) {
        return view('admin.financial.index');
    }

    public function indexList(Request $request){
        return $this->service->indexList($request);
    }

    public function show(Request $request, $id){
        return response($this->service->show($request, $id));
    }
    public function delete(Request $request, $id){
        $this->service->delete($id);
        return redirect()->back()->withSuccess("Request deleted successfully");
    }
}
