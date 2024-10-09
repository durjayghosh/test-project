<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{User, Menu, MenuPermission, Role};
use Illuminate\Support\Str;
use App\Http\DataTable\AgentDataTable as DataTable;
use Auth;
use Mail;
use DB;

class AgentService {

    public function __construct(
        DataTable $datatable,
        User $user
    ) {
        $this->datatable= $datatable;
        $this->user= $user;

    }

    //users list
    public function indexList(Request $request){
        return $this->datatable->indexList($request);
    }

    public function insert($request){

        $fileName = '';
        if($request->file('profile_image')){
            $file = $request->file('profile_image') ;
			$fileName = time().$file->getClientOriginalName() ;
			$destinationPath = public_path().'/profile' ;
			$file->move($destinationPath,$fileName);
        }
        $result = $this->user->create([
            'name'=> ucwords($request->first_name .' '.$request->last_name),
            'first_name'=>ucwords($request->first_name),
            'last_name'=>ucwords($request->last_name),
            'user_name'=>Str::slug($request->first_name .' '.$request->last_name, '-'),
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'phone'=>$request->phone ? $request->phone : '',
            'status' => $request->status,
            'role' => $request->role,
            'role_name' => Role::where('id',$request->role)->first('role')['role'],
            'profile_image' => $fileName
        ]);

      return  $result;
    }

    public function update($request){
        $customer = $this->user->where('id', $request->id)->first();
        $user_name = Str::slug($request->first_name .' '.$request->last_name, '-');
        $customer->name = ucwords($request->first_name .' '.$request->last_name);
        $customer->first_name = ucwords($request->first_name);
        $customer->last_name = ucwords($request->last_name);
        $customer->user_name = $user_name;
        $customer->role = $request->role;
        $customer->role_name = $request->role ? Role::where('id',$request->role)->first('role')['role'] : $customer->role_name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        if($request->password) {
            $customer->password = bcrypt($request->password);
        }
        $customer->status = $request->status;
        if($request->file('profile_image')){
            $file = $request->file('profile_image') ;
			$fileName = time().$file->getClientOriginalName() ;
			$destinationPath = public_path().'/profile' ;
			$file->move($destinationPath,$fileName);
            $customer->profile_image = $fileName;
        }
        if($customer->save()){
            return true;
        }
    }

    public function getOne($id){
        $result['user'] = $this->user->where('id', $id)->first();
        $result['Role'] = Role::where('status', 1)->whereNotIn('id', [1])->get();
        return $result;
    }

    public function add(){
        $result['Role'] = Role::where('status', 1)->whereNotIn('id', [1])->get();
        return $result;
    }

    public function deleteOne($id){
        $result = $this->user->where('id', $id)->where('role', '!=', 1)->delete();
        return $result;
    }

    public function getAll($request){
        $query = $this->user->get();
        return $query;
    }

}
