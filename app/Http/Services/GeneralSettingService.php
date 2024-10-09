<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\{GeneralSetting};
use Illuminate\Support\Str;
use App\Http\DataTable\GalleryDataTable as DataTable;
use Auth;
use Mail;
use DB;

class GeneralSettingService {

    public function __construct(
        DataTable $datatable,
        GeneralSetting $GeneralSetting
    ) {
        $this->datatable= $datatable;
        $this->GeneralSetting= $GeneralSetting;

    }

    public function settingGet($request){
        $GeneralSetting = GeneralSetting::first();
        return $GeneralSetting;
    }

    public function settingPost($request){

        if(isset($request->id)){
            $GeneralSetting = GeneralSetting::where('id', $request->id)->first();
        }else{
            $GeneralSetting = new GeneralSetting;
        }
        $GeneralSetting->website_name = $request->website_name;
        $GeneralSetting->contact_number = $request->contact_number;
        $GeneralSetting->alternate_contact_number = $request->alternate_contact_number;
        $GeneralSetting->copyright = $request->copyright;
        $GeneralSetting->email = $request->email;
        $GeneralSetting->youtube = $request->youtube;
        $GeneralSetting->facebook = $request->facebook;
        $GeneralSetting->instagram = $request->instagram;
        $GeneralSetting->twitter = $request->twitter;
        $GeneralSetting->wordpress = $request->wordpress;
        $GeneralSetting->footer_website_name = $request->footer_website_name;
        $GeneralSetting->coupon_discount = $request->coupon_discount;
        $GeneralSetting->header_css = $request->header_css;
        $GeneralSetting->header_script = $request->header_script;
        $GeneralSetting->footer_script = $request->footer_script;
        if($request->file('logo')){
            $file = $request->file('logo') ;
            $fileName = time().$file->getClientOriginalName() ;
            $destinationPath = storage_path().'/app/public/gallery';
            $file->move($destinationPath,$fileName);
            $GeneralSetting->logo = $request->file('logo') ? 'storage/gallery/'.$fileName : null;
        }

        $GeneralSetting->save();
        return $GeneralSetting;
    }


}
