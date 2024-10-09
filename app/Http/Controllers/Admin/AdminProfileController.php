<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CustomerUpdateRequest;
use App\Http\Requests\Admin\AdminChangePasswordRequest;
use App\Http\Services\AdminProfileService as Service;
use DB;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    protected $service;

    public function __construct(Service $service) {
       $this->service = $service;
    }

    //Edit a customer
    public function edit(Request $request){
        $response['user'] = $this->service->getOne($request->id);
        return view('admin.profile.edit', $response);
    }

    //update customer
    public function update(CustomerUpdateRequest $request){
        $this->service->update($request);
        return redirect()->back()->withSuccess("Profile is updated successfully");
    }
    /// change password
    public function changePassword(Request $request){
        return view('admin.profile.change_password');
    }
    public function updatePassword(AdminChangePasswordRequest $request){
        $user_detail = DB::table('users')->where('id',auth()->user()->id)->first();
        if(Hash::check($request->old_password, $user_detail->password)) {
            $password_update = DB::table('users')->where('id',auth()->user()->id)->update([
                'password' => bcrypt($request->password)
            ]);
            return redirect('admin/dashboard')->withSuccess('Successfully changed password');
        } else {
            return redirect()->back()->withError("Old password not match");
        }

    }


}
