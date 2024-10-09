<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{Role, Menu, MenuPermission};
use Illuminate\Support\Str;
use App\Http\DataTable\RoleDataTable as DataTable;
use Auth;
use Mail;
use DB;

class RoleService {

    public function __construct(
        DataTable $datatable,
        Role $Role
    ) {
        $this->datatable= $datatable;
        $this->Role= $Role;

    }

    //users list
    public function indexList(Request $request){
        return $this->datatable->indexList($request);
    }

    public function insert($request){
        $fileName = '';

        $result = $this->Role->create([
            'role'=>$request->role,
            'status'=>$request->status
        ]);

        if(isset($request->menu_id)){
            $dataArray = [];
            foreach($request->menu_id as $menu){
                $data = [];
                $data['menu_id'] = $menu;
                $data['role_id'] = $result->id;
                $dataArray[] = $data;
            }
            MenuPermission::insert($dataArray);
        }

      return  $result;
    }

    public function update($request){
        $customer = $this->Role->where('id', $request->id)->first();
        $customer->role = $request->role;
        $customer->status = $request->status;
        if(isset($request->menu_id)){
            $dataArray = [];
            $menuList = MenuPermission::where('role_id', $request->id)->whereNotIn('menu_id', $request->menu_id)->delete();
            $menuList = MenuPermission::where('role_id', $request->id)->whereIn('menu_id', $request->menu_id)->pluck('menu_id');

            if($menuList->count() > 0){
                $menuArray = $menuList->toArray();
                foreach($request->menu_id as $menu){
                    if(in_array($menu, $menuArray)) continue;
                    $data = [];
                    $data['menu_id'] = $menu;
                    $data['role_id'] = $request->id;
                    $dataArray[] = $data;
                }
            }else{
                foreach($request->menu_id as $menu){
                    $data = [];
                    $data['menu_id'] = $menu;
                    $data['role_id'] = $request->id;
                    $dataArray[] = $data;
                }
            }
            MenuPermission::insert($dataArray);
        }
        if($customer->save()){
            return true;
        }
    }

    public function getOne($id){
        $result['role'] = $this->Role->where('id', $id)->first();
        //$result['menu'] = Menu::get();
        $result['menu'] = DB::table('menu')->get();
        $result['menu_permission'] = MenuPermission::where('role_id', $id)->get();
        return $result;
    }

    public function add(){
        $result['menu'] = Menu::get();
        return $result;
    }

    public function deleteOne($id){
        $result = $this->Role->where('id', $id)->delete();
        MenuPermission::where('role_id', $id)->delete();
        return $result;
    }

    public function getAll($request){
        $query = $this->Role->get();
        return $query;
    }
}
