<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
Use Mail;
Use DB;
use App\Models\{PartnerOpportunity, PageSection, FranchiseFinancial, Page};

class PartnerShipController extends Controller
{
    public function index(Request $request){
        app('mathcaptcha')->reset();
        $PartnerOpportunity = PartnerOpportunity::get();
        $Page = Page::where('id', 5)->first();
        $PageSections = PageSection::where('page_id', 5)->with('sectionList')->get();
        return view('frontend.partnerships', compact('PartnerOpportunity', 'PageSections', 'Page'));
    }

    public function franchiseFinancials(Request $request){
        $validation = validator::make($request->all(), [
            'full_name' => 'required|string',
            'contact_number' => 'required|numeric|digits:10',
            'email' => 'required|email',
            'qualification'  => 'required',
            'management_experirnce' => 'required',
            'achivements' => 'required',
            'why_wigomania' => 'required',
            'believe' => 'required'

        ]);

        if($validation->fails()){
            return response(['error' => true, 'error_message' => $validation->messages()]);
        }
		$otp = rand(1000, 9000);
        $FranchiseFinancial = new FranchiseFinancial();
        $FranchiseFinancial->full_name = ucwords($request->full_name);
        $FranchiseFinancial->contact_number = $request->contact_number;;
        $FranchiseFinancial->email = $request->email;
		$email = $request->email;
        $FranchiseFinancial->qualification = $request->qualification;
        $FranchiseFinancial->management_experirnce = $request->management_experirnce;
        $FranchiseFinancial->achivements = $request->achivements;
        $FranchiseFinancial->why_wigomania = $request->why_wigomania;
        $FranchiseFinancial->believe = $request->believe;
		$FranchiseFinancial->otp = $otp;
        $FranchiseFinancial->save();
		$response = $this->sendOtp($FranchiseFinancial);
       
        return response(['success' => true, 'success_message' => 'OTP send to your whatsapp number!','request' => $request->all(), 'FranchiseFinancial' => $FranchiseFinancial]);
    }

	public function sendOtp($FranchiseFinancial)
    { 	
		
        if (!empty($FranchiseFinancial->contact_number) && !empty($FranchiseFinancial->email)) {
            $curl = curl_init();
            curl_setopt_array($curl, array(
               CURLOPT_URL => 'https://waba.360dialog.io/v1/messages/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                            "to": "+91'.$FranchiseFinancial->contact_number . '",
                            "type": "template",
                            "template": {
                             "namespace": "bba29b1c_d383_40f8_8ef1_81e3b9e63340",
                             "language": {
                                 "policy": "deterministic",
                                 "code": "en"
                             },
                             "name": "website_otp",
                             "components": [
                                 {
                                     "type": "body",
                                     "parameters": [
                                         {
                                             "type": "text",
                                             "text": "' . $FranchiseFinancial->otp . '"
                                         }
                                     ]
                                 }
                             ]
                          }
                    }',
                CURLOPT_HTTPHEADER => array(
                    'D360-API-KEY: rfMvPx7jR1eJlaCswu180jEDAK',
                    'Accept: application/json',
                    'Content-Type: application/json'
                ),
            )
            );
            $response = curl_exec($curl);
            curl_close($curl);
            $FranchiseFinancial->save();
            return response(array('result' => $response, 'status' => 'Success'));
        } else {
            return response(array('result' => [], 'status' => 'Fail'));
        }
    }

    public function brochure()
    {
        $file= public_path(). "/frontend/Franchisee-Brochure.pdf";
        $headers = array('Content-Type: application/pdf');
        return response()->download($file, 'Franchisee-Brochure.pdf', $headers);
    }
}
