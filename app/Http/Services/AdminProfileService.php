<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Auth;
use Mail;
use DB;

class AdminProfileService {

    public function __construct(
        User $user
    ) {
        $this->user= $user;

    }

    public function getOne($id){
        $result = $this->user->where('id', $id)->first();
        return $result;
    }

    public function update($request){
        //dd($request->all());
        $customer = $this->user->where('id', $request->id)->first();
        $user_name = Str::slug($request->first_name .' '.$request->last_name, '-');
        $customer->name = $request->first_name .' '.$request->last_name;
        $customer->first_name = $request->first_name ? $request->first_name : $customer->first_name;
        $customer->last_name = $request->last_name ? $request->last_name : $customer->last_name;
        $customer->user_name = $user_name;
        $customer->email = $request->email ? $request->email : $customer->email;
        $customer->phone = $request->phone ? $request->phone : $customer->phone;
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





}
