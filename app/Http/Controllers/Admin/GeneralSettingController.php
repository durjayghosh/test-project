<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\GeneralSettingService as Service;

class GeneralSettingController extends Controller
{
    protected $service;

    public function __construct(Service $service) {
        $this->service = $service;
    }

    public function setting(Request $request){
        if($request->isMethod('get')){
            $result = $this->service->settingGet($request);
            return view('admin.general_setting.edit', compact('result'));
        }else if($request->isMethod('post')){
            $request->validate([
                "website_name" => 'required|string|max:200',
                "footer_website_name" => 'required|string|max:200',
                "contact_number" => 'nullable|numeric|digits:10',
                "alternate_contact_number" => 'nullable|numeric|digits:10',
                "logo" => 'nullable|mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048',
                "email" => 'nullable|email',
                "youtube" => ['nullable','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
                "facebook" => ['nullable','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
                "instagram" => ['nullable','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
                "twitter" => ['nullable','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
                "wordpress" => ['nullable','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
                "header_css" => 'required|string',
                "header_script" => 'required|string',
                // "footer_script" => 'required|string',

           
            ]);
            $result = $this->service->settingPost($request);
            return redirect()->back()->withSuccess("General Settings Update Successfully!");
        }

        return redirect()->back()->withError("Something went wrong!");
    }
}
