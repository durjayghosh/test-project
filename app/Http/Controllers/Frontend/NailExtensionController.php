<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\Recaptcha;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;;
use Illuminate\Support\Facades\Validator;
use App\Models\{NailContactForm,NailForm,NailCourseContactForm};

class NailExtensionController extends Controller
{
    public function index(Request $request)
    {	app('mathcaptcha')->reset();
        return view('frontend.nail_academy');
    }
	public function Termspolices(Request $request)
    {
       return view('frontend.index_policy');
    }
	public function registercourse(Request $request)
    {
		$name = $request->query('name');
        $email = $request->query('email');
        $number = $request->query('number');
		return view('frontend.registernailcourse', compact('name', 'email','number'));
    }
	public function nailcontactus_old(Request $request) {
		$validation = validator::make($request->all(), [
            'full_name' => 'required|max:100',
            'mobile_number' => 'required|numeric|digits:10',
            'email' => 'required|email',
            'purpose' => 'required'
        ]);
        if ($validation->fails()) { 
            return response(['error' => true, 'error_message' => $validation->messages()]);
        }
		$otp = rand(1000, 9000);
		
		$nailcontactus = new NailContactForm();
		
        $nailcontactus->name = $request->full_name;
        $nailcontactus->mobile = $request->mobile_number;
        $nailcontactus->email = $request->email;
        $nailcontactus->messsage = $request->purpose;
        $nailcontactus->dial_code = $request->dial_code ? $request->dial_code : '91';
        $nailcontactus->submit_date = date('y-m-d');
		$nailcontactus->otp = $otp;
		
        $nailcontactus->save();
		$response = $this->sendOtpnail($nailcontactus);
		return response(['success' => true, 'success_message' => 'OTP send to your whatsapp number!', 'request' => $request->all(), 'nailcontactus' => $nailcontactus]);
    }
	public function nailcontactus(Request $request) {
		$validation = validator::make($request->all(), [
            'full_name' => 'required|max:100',
            'mobile_number' => 'required|numeric|digits:10',
            'email' => 'required|email',
            'purpose' => 'required',
			'mathcaptcha' => 'required|mathcaptcha'
        ], [
                'mathcaptcha.required' => 'The recaptcha is required',
                'mathcaptcha.mathcaptcha' => 'Please correct answer'
        ]);
        if ($validation->fails()) { 
            return response(['error' => true, 'error_message' => $validation->messages()]);
        }
		$otp = rand(1000, 9000);
		
		$nailcontactus = new NailContactForm();
		
        $nailcontactus->name = $request->full_name;
        $nailcontactus->mobile = $request->mobile_number;
        $nailcontactus->email = $request->email;
        $nailcontactus->messsage = $request->purpose;
        $nailcontactus->dial_code = $request->dial_code ? $request->dial_code : '91';
        $nailcontactus->submit_date = date('y-m-d');
		//$nailcontactus->otp = $otp;
		
        $nailcontactus->save();
		 $mail_data_Customer = array('name' => $request->full_name, 'mobile_number' => $request->mobile_number, 'email' => $request->email,'page_title' => 'Nail Acadmey Contact Us', 'purpose'=>$request->purpose ,'domain' => 'Wigomania.com/blueskynailacademy.hyderabad','countryCode' => $request->dial_code);
			$email = $request->email;
			Mail::send('frontend.mail.nail_contact_user', $mail_data_Customer, function ($message) use ($email) {
				$message->to($email, ' Booking Revert')->subject('Nail Academy Inquiry');
				$message->from('blueskyacademy.hyd@wigomania.co.uk', config('app.name'));
			});
			
			$mail_data_admin = array('name' => $request->full_name, 'mobile_number' => $request->mobile_number, 'email' => $request->email,'page_title' => 'Nail Acadmey Contact Us', 'purpose'=>$request->purpose,'domain' => 'Wigomania.com/blueskynailacademy.hyderabad','countryCode' => $request->dial_code);
			
			Mail::send('frontend.mail.nail_contact_admin', $mail_data_admin, function ($message) use ($email) {
			$message->to('blueskyacademy.hyd@wigomania.co.uk', ' Coupons Request')->subject('Nail Academy Inquiry');
			$message->to('support@wigomania.com', ' Booking Revert')->subject('Nail Academy Inquiry');
			 $message->from('blueskyacademy.hyd@wigomania.co.uk', config('app.name'));
			});
        
			return response(['success' => true, 'is_relode' => 'yes']);
		//$response = $this->sendOtpnail($nailcontactus);
		//return response(['success' => true, 'success_message' => 'OTP send to your whatsapp number!', 'request' => $request->all(), 'nailcontactus' => $nailcontactus]);
    }
	public function nailCoursecontactus_old(Request $request)
    {
		$validation = validator::make($request->all(), [
			'full_name' => 'required',
            'full_name' => 'required|max:100',
            'mobile_number' => 'required|numeric|digits:10',
        ]);
        if ($validation->fails()) { 
            return response(['error' => true, 'error_message' => $validation->messages()]);
        }
		$otp = rand(1000, 9000);
		$nailCoursecontactus = new NailCourseContactForm();
        $nailCoursecontactus->name = $request->full_name;
        $nailCoursecontactus->mobile = $request->mobile_number;
        $nailCoursecontactus->email = $request->email;
        $nailCoursecontactus->dial_code = $request->dial_code ? $request->dial_code : '91';
        $nailCoursecontactus->submit_date = date('y-m-d');
		$nailCoursecontactus->otp = $otp;
        $nailCoursecontactus->save();
		$response = $this->sendOtpnail($nailCoursecontactus);
		return response(['success' => true, 'success_message' => 'OTP send to your whatsapp number!', 'request' => $request->all(), 'nailCourseus' => $nailCoursecontactus]);
    }
	public function nailCoursecontactus(Request $request)
    {
		$validation = validator::make($request->all(), [
            'full_name' => 'required|max:100',
            'mobile_number' => 'required|numeric|digits:10',
            'email' => 'required|email',
			'mathcaptcha' => 'required|mathcaptcha'
        ], [
                'mathcaptcha.required' => 'The recaptcha is required',
                'mathcaptcha.mathcaptcha' => 'Please correct answer'
        ]);
        if ($validation->fails()) { 
            return response(['error' => true, 'error_message' => $validation->messages()]);
        }
		//$otp = rand(1000, 9000);
		$nailCoursecontactus = new NailCourseContactForm();
        $nailCoursecontactus->name = $request->full_name;
        $nailCoursecontactus->mobile = $request->mobile_number;
        $nailCoursecontactus->email = $request->email;
        $nailCoursecontactus->dial_code = $request->dial_code ? $request->dial_code : '91';
        $nailCoursecontactus->submit_date = date('y-m-d');
		//$nailCoursecontactus->otp = $otp;
        $nailCoursecontactus->save();
		$mail_data_Customer = array('name' => $request->full_name, 'mobile_number' => $request->mobile_number, 'email' => $request->email,'page_title' => 'Nail Acadmey Contact Us','domain' => 'Wigomania.com/blueskynailacademy.hyderabad','countryCode' => $request->dial_code);
			$email = $request->email;
			Mail::send('frontend.mail.nailcourse_contact_user', $mail_data_Customer, function ($message) use ($email) {
				$message->to($email, ' Booking Revert')->subject('Nail Academy Inquiry');
				$message->from('blueskyacademy.hyd@wigomania.co.uk', config('app.name'));
			});
			
			$mail_data_admin = array('name' => $request->full_name, 'mobile_number' => $request->mobile_number, 'email' => $request->email,'page_title' => 'Nail Acadmey Contact Us','domain' => 'Wigomania.com/blueskynailacademy.hyderabad','countryCode' => $request->dial_code);
			
			Mail::send('frontend.mail.nailcourse_contact_admin', $mail_data_admin, function ($message) use ($email) {
				$message->to('blueskyacademy.hyd@wigomania.co.uk', ' Coupons Request')->subject('Nail Academy Inquiry');
				$message->to('support@wigomania.com', ' Booking Revert')->subject('Nail Academy Inquiry');
				$message->from('blueskyacademy.hyd@wigomania.co.uk', config('app.name'));
			});
        
		return response(['success' => true, 'is_relode' => 'yes']); 
		//$response = $this->sendOtpnail($nailCoursecontactus);
		//return response(['success' => true, 'success_message' => 'OTP send to your whatsapp number!', 'request' => $request->all(), 'nailCourseus' => $nailCoursecontactus]);
    }
	public function nailCoursecontactusold(Request $request){
        // Return a response with a redirect URL
        return response()->json(['url' => route('registercourse')]);
    }
	public function thanku(Request $request)
    {
		return view('frontend.thanku_nail');
    }
	public function coursesdetail(Request $request)
    {
		return view('frontend.Courses_nail');
    }
	public function MarbleArt(Request $request)
    {
		return view('frontend.MarbleArt');
    }
	public function NailStart(Request $request)
    {
		return view('frontend.NailStart');
    }
	public function GumGelExtensions(Request $request)
    {
		return view('frontend.GumGelExtensions');
    }
	public function NailExtensions(Request $request)
    {
		return view('frontend.NailExtensions');
    }
	public function NailExtensionsPlus(Request $request)
    {
		return view('frontend.NailExtensionsPlus');
    }
	public function RussianManicure(Request $request)
    {
		return view('frontend.RussianManicure');
    }
	public function SoftGelExtensionsCertification(Request $request)
    {
		return view('frontend.SoftGelExtensionsCertification');
    }
	public function OmbreGlazeNail(Request $request)
    {
		return view('frontend.OmbreGlazeNail');
    }
	public function GelNailArt(Request $request)
    {
		return view('frontend.GelNailArt');
    }
	public function StampingNailArt(Request $request)
    {
		return view('frontend.StampingNailArt');
    }
	public function DGelCertification(Request $request)
    {
		return view('frontend.DGelCertification');
    }
	public function WorkwithEfilter(Request $request)
    {
		return view('frontend.WorkwithEfilter');
    }
	public function frenchgelpolish(Request $request)
    {
		return view('frontend.frenchgelpolish');
    }
	public function CatEyeCatNailArt(Request $request)
    {
		return view('frontend.CatEyeCatNailArt');
    }
	public function ChromeNailArt(Request $request)
    {
		return view('frontend.ChromeNailArt');
    }
	
	public function POPUPFORM_old(Request $request)
    {
		$validation = validator::make($request->all(), [
            'full_name' => 'required|max:100',
            'mobile_number' => 'required|numeric|digits:10',
            'email' => 'required|email',
            
        ], [
              //  'mathcaptcha.required' => 'The recaptcha is required',
               // 'mathcaptcha.mathcaptcha' => 'Please correct answer'
            ]);
        if ($validation->fails()) {
            return response(['error' => true, 'error_message' => $validation->messages()]);
        }
        $otp = rand(1000, 9000);
        $ReachUs = new NailForm();
        $ReachUs->full_name = $request->full_name;
        $ReachUs->mobile_number = $request->mobile_number;
        $ReachUs->dial_code = $request->dial_code ? $request->dial_code : '91';
        $ReachUs->country_data = $request->country_data;
        $ReachUs->email = $request->email;
        $ReachUs->purpose_of_enquery = $request->purpose_of_enquery;
        $ReachUs->otp = $otp;
        $ReachUs->save();
        $response = $this->sendOtp($ReachUs);
		
        app('mathcaptcha')->reset();
        
        return response(['success' => true, 'success_message' => 'OTP send to your whatsapp number!', 'request' => $request->all(), 'ReachUs' => $ReachUs]);
    }
	public function POPUPFORM(Request $request)
    {
		$validation = validator::make($request->all(), [
            'full_name' => 'required|max:100',
            'mobile_number' => 'required|numeric|digits:10',
            'email' => 'required|email',
			'mathcaptcha' => 'required|mathcaptcha'
        ], [
                'mathcaptcha.required' => 'The recaptcha is required',
                'mathcaptcha.mathcaptcha' => 'Please correct answer'
        ]);
            
        
        if ($validation->fails()) {
            return response(['error' => true, 'error_message' => $validation->messages()]);
        }
        $otp = rand(1000, 9000);
        $ReachUs = new NailForm();
        $ReachUs->full_name = $request->full_name;
        $ReachUs->mobile_number = $request->mobile_number;
        $ReachUs->dial_code = $request->dial_code ? $request->dial_code : '91';
        $ReachUs->country_data = $request->country_data;
        $ReachUs->email = $request->email;
        $ReachUs->purpose_of_enquery = $request->purpose_of_enquery;
       // $ReachUs->otp = $otp;
        $ReachUs->save();
        //$response = $this->sendOtp($ReachUs);
		
        app('mathcaptcha')->reset();
        
        $mailData = array('email' => 'full_name');
			$email = $ReachUs->email; //test xyz>
			$mail_data_admin = array('name' => $ReachUs->full_name, 'mobile_number' => $ReachUs->mobile_number, 'email' => $ReachUs->email, 'date' => date('Y-m-d'),'page_title' => 'Nail Academy','coupon' => '', 'domain' => 'Wigomania.com/blueskynailacademy.hyderabad', 'countryCode' => $ReachUs->dial_code, 'help' => $ReachUs->purpose_of_enquery);
		
			Mail::send('frontend.mail.coupon_nail', $mail_data_admin, function ($message) use ($email) {
            $message->to($email, 'Coupons')->subject('Coupons Request From Nail Academy');
            $message->from('blueskyacademy.hyd@wigomania.co.uk', config('app.name'));
			});
			
			$mail_data_admin = array('name' => $ReachUs->full_name, 'mobile_number' => $ReachUs->mobile_number, 'email' => $ReachUs->email, 'date' => date('Y-m-d'),'page_title' => 'Nail Academy','coupon' => '', 'domain' => 'Wigomania.com/blueskynailacademy.hyderabad', 'countryCode' => $ReachUs->dial_code, 'help' => $ReachUs->purpose_of_enquery);
			
			Mail::send('frontend.mail.coupon_nail', $mail_data_admin, function ($message) use ($email) {
			$message->to('blueskyacademy.hyd@wigomania.co.uk', ' Coupons Request')->subject('Coupons Request From Nail Academy');
			$message->to('support@wigomania.com', ' Coupons Request')->subject('Coupons Request From Nail Academy');
			 $message->from('blueskyacademy.hyd@wigomania.co.uk', config('app.name'));
			});
			
            return response(array('status' => true, 'success_message' => 'Cuppon code send to your whats app number','is_relode'=>'yes','coupon' => $ReachUs->coupon_code));
    }
	public function sendOtp($ReachUs) { 
        if (!empty($ReachUs->mobile_number) && !empty($ReachUs->email)) {
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
                            "to": "' . $ReachUs->dial_code . $ReachUs->mobile_number . '",
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
                                             "text": "' . $ReachUs->otp . '"
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
			//echo '<pre>';print_r($response);die;
            curl_close($curl);
            $ReachUs->save();
            return response(array('result' => $response, 'status' => 'Success'));
        } else {
            return response(array('result' => [], 'status' => 'Fail'));
        }
    }
	
	public function sendOtpnail($nailcontactus) { 
	
        if (!empty($nailcontactus->mobile) && !empty($nailcontactus->email)) {
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
                            "to": "' . $nailcontactus->dial_code . $nailcontactus->mobile . '",
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
                                             "text": "' . $nailcontactus->otp . '"
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
			//echo '<pre>';print_r($response);die;
            curl_close($curl);
            $nailcontactus->save();
            return response(array('result' => $response, 'status' => 'Success'));
        } else {
            return response(array('result' => [], 'status' => 'Fail'));
        }
    }
	public function submitOtp(Request $request){
		
        $validation = validator::make($request->all(), [
            'otp' => 'required|numeric|digits:4',
        ]);

        if ($validation->fails()) {
            return response(['error' => true, 'error_message' => $validation->messages()]);
        }

        $ReachUs = NailForm::where('id', $request->reachus_coupons)->where('otp', $request->otp)->first();
		$Couponpopup = NailForm::where('id', $request->reachus_id)->where('otp', $request->otp)->first();
        $NailContactForm = NailContactForm::where('id', $request->contact_id)->where('otp', $request->otp)->first();
        
        if ($ReachUs) {
            $this->sendCuppon($request, $ReachUs);
			$mailData = array('email' => 'full_name');
			$email = $ReachUs->email; //test xyz>
			$mail_data_admin = array('name' => $ReachUs->full_name, 'mobile_number' => $ReachUs->mobile_number, 'email' => $ReachUs->email, 'date' => date('Y-m-d'),'page_title' => 'Nail Academy','coupon' => $ReachUs->coupon_code, 'domain' => 'Wigomania.com/blueskynailacademy.hyderabad', 'countryCode' => $ReachUs->dial_code, 'help' => $ReachUs->purpose_of_enquery);
		
			Mail::send('frontend.mail.coupon_nail', $mail_data_admin, function ($message) use ($email) {
            $message->to($email, 'Coupons')->subject('Coupons Request From Nail Academy');
            $message->from('blueskyacademy.hyd@wigomania.co.uk', config('app.name'));
			});
			
			$mail_data_admin = array('name' => $ReachUs->full_name, 'mobile_number' => $ReachUs->mobile_number, 'email' => $ReachUs->email, 'date' => date('Y-m-d'),'page_title' => 'Nail Academy','coupon' => $ReachUs->coupon_code, 'domain' => 'Wigomania.com/blueskynailacademy.hyderabad', 'countryCode' => $ReachUs->dial_code, 'help' => $ReachUs->purpose_of_enquery);
			
			Mail::send('frontend.mail.coupon_nail', $mail_data_admin, function ($message) use ($email) {
			$message->to('blueskyacademy.hyd@wigomania.co.uk', ' Coupons Request')->subject('Coupons Request From Nail Academy');
			$message->to('support@wigomania.com', ' Coupons Request')->subject('Coupons Request From Nail Academy');
			 $message->from('blueskyacademy.hyd@wigomania.co.uk', config('app.name'));
			});
			
            return response(array('status' => true, 'success_message' => 'Cuppon code send to your whats app number','is_relode'=>'yes','coupon' => $ReachUs->coupon_code));
       }else if ($Couponpopup) {
            $this->sendCuppon($request, $Couponpopup);
			$mailData = array('email' => 'full_name');
			$email = $Couponpopup->email; //test xyz>
			$mail_data_admin = array('name' => $Couponpopup->full_name, 'mobile_number' => $Couponpopup->mobile_number, 'email' => $Couponpopup->email, 'date' => date('Y-m-d'),'page_title' => 'Nail Academy','coupon' => $Couponpopup->coupon_code, 'domain' => 'Wigomania.com/blueskynailacademy.hyderabad', 'countryCode' => $Couponpopup->dial_code, 'help' => $Couponpopup->purpose_of_enquery);
		
			Mail::send('frontend.mail.coupon_nail', $mail_data_admin, function ($message) use ($email) {
            $message->to($email, 'Coupons')->subject('Coupons Request From Nail Academy');
            $message->from('blueskyacademy.hyd@wigomania.co.uk', config('app.name'));
			});
			
			$mail_data_admin = array('name' => $Couponpopup->full_name, 'mobile_number' => $Couponpopup->mobile_number, 'email' => $Couponpopup->email, 'date' => date('Y-m-d'),'page_title' => 'Nail Academy','coupon' => $Couponpopup->coupon_code, 'domain' => 'Wigomania.com/blueskynailacademy.hyderabad', 'countryCode' => $Couponpopup->dial_code, 'help' => $Couponpopup->purpose_of_enquery);
			
			Mail::send('frontend.mail.coupon_nail', $mail_data_admin, function ($message) use ($email) {
			$message->to('blueskyacademy.hyd@wigomania.co.uk', ' Coupons Request')->subject('Coupons Request From Nail Academy');
			$message->to('support@wigomania.com', ' Coupons Request')->subject('Coupons Request From Nail Academy');
			 $message->from('blueskyacademy.hyd@wigomania.co.uk', config('app.name'));
			});
			
            return response(array('status' => true, 'success_message' => 'Cuppon code send to your whats app number','is_relode'=>'yes','coupon' => $Couponpopup->coupon_code));
       }else if($NailContactForm){
		   $mail_data_Customer = array('name' => $request->full_name, 'mobile_number' => $request->mobile_number, 'email' => $request->email,'page_title' => 'Nail Acadmey Contact Us', 'purpose'=>$request->purpose ,'domain' => 'Wigomania.com/blueskynailacademy.hyderabad','countryCode' => $request->dial_code);
			$email = $request->email;
			Mail::send('frontend.mail.nail_contact_user', $mail_data_Customer, function ($message) use ($email) {
				$message->to($email, ' Booking Revert')->subject('Nail Academy Inquiry');
				$message->from('blueskyacademy.hyd@wigomania.co.uk', config('app.name'));
			});
			
			$mail_data_admin = array('name' => $request->full_name, 'mobile_number' => $request->mobile_number, 'email' => $request->email,'page_title' => 'Nail Acadmey Contact Us', 'purpose'=>$request->purpose,'domain' => 'Wigomania.com/blueskynailacademy.hyderabad','countryCode' => $request->dial_code);
			
			Mail::send('frontend.mail.nail_contact_admin', $mail_data_admin, function ($message) use ($email) {
			$message->to('blueskyacademy.hyd@wigomania.co.uk', ' Coupons Request')->subject('Nail Academy Inquiry');
			$message->to('support@wigomania.com', ' Booking Revert')->subject('Nail Academy Inquiry');
			 $message->from('blueskyacademy.hyd@wigomania.co.uk', config('app.name'));
			});
        
			return response(['success' => true, 'is_relode' => 'yes']); 
            //return response(array('status' => true, 'success_message' => 'Cuppon code send to your whats app number','is_relode'=>'yes'));
	   } else {
             return response(array('error' => true, 'error_message1' => 'invalid credentials'));
        }
     }
	 public function submitOtpRegister(Request $request){
        $validation = validator::make($request->all(), [
            'otp' => 'required|numeric|digits:4',
        ]);
        if ($validation->fails()) {
            return response(['error' => true, 'error_message' => $validation->messages()]);
        }
		$data = array([
            'name' => $request->full_name,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email
        ]);
		
        $NailCourseContactForm = NailCourseContactForm::where('id', $request->nailCourseus)->where('otp', $request->otp)->first();
		//echo '<pre>';print_r($NailCourseContactForm);die;
		if($NailCourseContactForm){
		   $mail_data_Customer = array('name' => $request->full_name, 'mobile_number' => $request->mobile_number, 'email' => $request->email,'page_title' => 'Nail Acadmey Contact Us','domain' => 'Wigomania.com/blueskynailacademy.hyderabad','countryCode' => $request->dial_code);
			$email = $request->email;
			Mail::send('frontend.mail.nailcourse_contact_user', $mail_data_Customer, function ($message) use ($email) {
				$message->to($email, ' Booking Revert')->subject('Nail Academy Inquiry');
				$message->from('blueskyacademy.hyd@wigomania.co.uk', config('app.name'));
			});
			
			$mail_data_admin = array('name' => $request->full_name, 'mobile_number' => $request->mobile_number, 'email' => $request->email,'page_title' => 'Nail Acadmey Contact Us','domain' => 'Wigomania.com/blueskynailacademy.hyderabad','countryCode' => $request->dial_code);
			
			Mail::send('frontend.mail.nailcourse_contact_admin', $mail_data_admin, function ($message) use ($email) {
				$message->to('blueskyacademy.hyd@wigomania.co.uk', ' Coupons Request')->subject('Nail Academy Inquiry');
				$message->to('support@wigomania.com', ' Booking Revert')->subject('Nail Academy Inquiry');
				$message->from('blueskyacademy.hyd@wigomania.co.uk', config('app.name'));
			});
        
			return response(['success' => true, 'is_relode' => 'yes']); 
            //return response(array('status' => true, 'success_message' => 'Cuppon code send to your whats app number','is_relode'=>'yes'));
		} else {
             return response(array('error' => true, 'error_message1' => 'invalid credentials'));
        }
     }
	 public function sendCuppon($request, $ReachUs)
    {
        
        $couponCODE = $this->generateRandomString(6);
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
                        "to": "' . $ReachUs->dial_code . $ReachUs->mobile_number . '",
                        "type": "template",
                        "template": {
                        "namespace": "bba29b1c_d383_40f8_8ef1_81e3b9e63340",
                        "language": {
                            "policy": "deterministic",
                            "code": "en"
                        },
                        "name": "website_coupon_nail",
                        "components": [
                            {
                                "type": "body",
                                "parameters": [
                                    {
                                        "type": "text",
                                        "text":   "' . $ReachUs->full_name . '"
                                    },
                                     {
                                        "type": "text",
                                        "text":  "' . $couponCODE . '"
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
        $ReachUs->coupon_code = $couponCODE;
        $ReachUs->ip_address = request()->ip();
        $ReachUs->save();
        return 1;
    }

    public function generateRandomString($length = 20)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}