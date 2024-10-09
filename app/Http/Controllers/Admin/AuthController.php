<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Mail;
use Session;

class AuthController extends Controller
{
    //Load Login View
    public function index()
    {
		if(!Auth::check()){
			return view('admin.login');
		}else{
			return redirect('admin/dashboard')->withSuccess('You have logged in successfully!');
		}
       // return view('admin.login');
    }

	//Attempt Login
	public function login(LoginRequest $request){

		if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1])) {
            if(Auth::user()->brand_id){
                session(['brand_id'=> Auth::user()->brand_id]);
            }
            return redirect('admin/dashboard')->withSuccess('You have logged in successfully!');
        }else{
			return redirect('admin/login')->withError('Email or password is wrong!');
		}
	}

	//Admin Logout
	public function logout(){
		Auth::logout();
        Session::flush();
  		return redirect()->route('admin.index')->withSuccess('You have logged out successfully!');
	}

    public function forgetPassword(Request $request){
        $otp  = rand(100000,999999);
        $user = User::where('email', $request->email)->get()->toArray();
        if(empty($user)){
            return redirect()->back()->withError('Please enter correct email');
        };
        $user = $user[0];
        $mailData = array('user'=> $user,'otp'=>$otp);
        $email = $user['email'];
        $updateOtp = User::where('email', $request->email)->update(['otp' => $otp]);

        if($updateOtp){
            Mail::send('admin.email.forgetpassword', $mailData, function($message) use($email) {
                $message->to($email, ' Reset your password')->subject
                    (' Reset your password');
                $message->from(env('MAIL_USERNAME'), config('app.name'));
            });
        }
        return redirect()->back()->with('success', 'otp send to your mail please check!');
    }

    public function resetPassword(Request $request, $email = null){
        if (! $request->isMethod('post')) {
            $email = base64_decode($email);
            return view('admin.otpverification', compact('email'));
        }

        $validator = $this->passwordValidate($request);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->messages())->withInput();
        }

        $user = '';
        $otp = implode("", $request->otp);
        if($otp){
            $user = User::where('email', $request->email)->where('otp', (int)$otp)->get()->toArray();
        }
        if($user){
            User::where('email', $request->email)->update([
                'password' => bcrypt($request->password)
            ]);
            return redirect()->route('admin.index');
        }
        return redirect()->back()->with('error', 'Otp is not verfied please try again!');
    }


    public function passwordValidate($request){
        return Validator::make($request->all(), [
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:6'
        ],
        [
        ]);
    }
}
