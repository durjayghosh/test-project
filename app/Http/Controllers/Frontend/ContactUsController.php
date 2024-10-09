<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\Recaptcha;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\{ReachUs,FranchiseFinancial};

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        app('mathcaptcha')->reset();
        return view('frontend.contact_us');
    }
    public function reachUs(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => ['required', new Recaptcha()],
            'full_name' => 'required|max:100',
            'mobile_number' => 'required|numeric|digits:10',
            'email' => 'required|email',
            'purpose_of_enquery' => 'required'
        ], ['g-recaptcha-response.required' => 'The google recaptcha field is required.']);
        $ReachUs = new ReachUs();
        $ReachUs->full_name = $request->full_name;
        $ReachUs->mobile_number = $request->mobile_number;
        $ReachUs->email = $request->email;
        $ReachUs->purpose_of_enquery = $request->purpose_of_enquery;
        $ReachUs->save();
        // return response(['success' => true, 'success_message' => 'Request submitted successfully!']);
        return redirect()->back()->withSuccess("Reach Us Request Successfully");
    }

    public function reachUsStore_old(Request $request)
    {
        $validation = validator::make($request->all(), [
            'full_name' => 'required|max:100',
            'mobile_number' => 'required|numeric|digits:10',
            'email' => 'required|email',
            //'purpose_of_enquery' => 'required'
            //'mathcaptcha' => 'required|mathcaptcha'
        ], [
              //  'mathcaptcha.required' => 'The recaptcha is required',
               // 'mathcaptcha.mathcaptcha' => 'Please correct answer'
            ]);
        if ($validation->fails()) {
            return response(['error' => true, 'error_message' => $validation->messages()]);
        }
        $otp = rand(1000, 9000);
        $ReachUs = new ReachUs();
        $ReachUs->full_name = $request->full_name;
        $ReachUs->mobile_number = $request->mobile_number;
        $ReachUs->dial_code = $request->dial_code ? $request->dial_code : '91';
        $ReachUs->country_data = $request->country_data;
        $ReachUs->email = $request->email;
        $ReachUs->purpose_of_enquery = $request->purpose_of_enquery;
        $ReachUs->comingfrom = $request->receivedfrom_add;
        $ReachUs->otp = $otp;
        $ReachUs->save();
        $response = $this->sendOtp($ReachUs);
		
        app('mathcaptcha')->reset();
        
        return response(['success' => true, 'success_message' => 'OTP send to your whatsapp number!', 'request' => $request->all(), 'ReachUs' => $ReachUs]);
        //return response(array('status' => true, 'success_message' => 'Cuppon code send to your whats app number','is_relode'=>'yes'));
    }
	
	public function reachUsStore(Request $request){
        $validation = validator::make($request->all(), [
            'full_name' => 'required|max:100',
            'mobile_number' => 'required|numeric|digits:10',
            'email' => 'required|email',
            'purpose_of_enquery' => 'required',
            'mathcaptcha' => 'required|mathcaptcha'
        ], [
                'mathcaptcha.required' => 'The recaptcha is required',
                'mathcaptcha.mathcaptcha' => 'Please correct answer'
            ]);
        if ($validation->fails()) {
			
            return response(['error' => true, 'error_message' => $validation->messages()]);
        }
        //$otp = rand(1000, 9000);
        $ReachUs = new ReachUs();
        $ReachUs->full_name = $request->full_name;
        $ReachUs->mobile_number = $request->mobile_number;
        $ReachUs->dial_code = $request->dial_code ? $request->dial_code : '91';
        $ReachUs->country_data = $request->country_data;
        $ReachUs->email = $request->email;
        $ReachUs->purpose_of_enquery = $request->purpose_of_enquery;
		$ReachUs->comingfrom = $request->receivedfrom_add;
        //$ReachUs->otp = $otp;
        $ReachUs->save();
        //$response = $this->sendOtp($ReachUs);
		//echo '<pre>';print_r($ReachUs);
		
        app('mathcaptcha')->reset();
        $email = $ReachUs->email; //test xyz>
		$mail_data_admin = array('name' => $ReachUs->full_name, 'mobile_number' => $ReachUs->mobile_number, 'email' => $ReachUs->email, 'date' => date('Y-m-d'),'page_title' => 'Home Page','coupon' => $ReachUs->coupon_code, 'domain' => 'Wigomania.com', 'countryCode' => $ReachUs->dial_code, 'help' => $ReachUs->purpose_of_enquery, 'Comingfrom'=>$ReachUs->comingfrom);
		
		if($request->frmtype=='reachus')
		{
			Mail::send('frontend.mail.reachus', $mail_data_admin, function ($message) use ($email) {
            $message->to($email, 'Reach Us')->subject('Reach Us');
            $message->from('support@wigomania.com', config('app.name'));
        });
		}
		else
		{
			Mail::send('frontend.mail.coupon', $mail_data_admin, function ($message) use ($email) {
            $message->to($email, 'Coupons')->subject('Coupons Request');
            $message->from('support@wigomania.com', config('app.name'));
        });
		}
        

        $mail_data_admin = array('name' => $ReachUs->full_name, 'mobile_number' => $ReachUs->mobile_number, 'email' => $ReachUs->email, 'date' => date('Y-m-d'),'page_title' => 'Home Page','coupon' => $ReachUs->coupon_code, 'domain' => 'Wigomania.com', 'countryCode' => $ReachUs->dial_code, 'help' => $ReachUs->purpose_of_enquery, 'Comingfrom'=>$ReachUs->comingfrom);
		if($request->frmtype=='reachus')
		{
			Mail::send('frontend.mail.reachus', $mail_data_admin, function ($message) use ($email) {
            $message->to('support@wigomania.com', ' Reach Us')->subject('Reach Us');
            $message->from('support@wigomania.com', config('app.name'));
			});
		}
		else{
				Mail::send('frontend.mail.coupon', $mail_data_admin, function ($message) use ($email) {
            $message->to('support@wigomania.com', ' Coupons Request')->subject('Coupons Request');
            $message->from('support@wigomania.com', config('app.name'));
			});
		}		
		
        return response(array('status' => true, 'success_message' => 'Cuppon code send to your whats app number','is_relode'=>'yes'));
        //return response(['success' => true, 'success_message' => 'OTP send to your whatsapp number!', 'request' => $request->all(), 'ReachUs' => $ReachUs]);
       // return response(array('status' => true, 'success_message' => 'Cuppon code send to your whats app number','is_relode'=>'yes'));
    }

    public function sendOtp($ReachUs)
    { 
	
        if (!empty($ReachUs->mobile_number) && !empty($ReachUs->email)) {
			$mobile = '+'.$ReachUs->dial_code . $ReachUs->mobile_number;
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
                            "to": "' . $mobile. '",
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
			
			echo '<pre>';print_r($response);die;
            curl_close($curl);
            $ReachUs->save();
            return response(array('result' => $response, 'status' => 'Success'));
        } else {
            return response(array('result' => [], 'status' => 'Fail'));
        }
    }
	
	
	public function submitOtp2(Request $request)
    {
        $validation = validator::make($request->all(), [
            'otp' => 'required|numeric|digits:4',
        ]);

        if ($validation->fails()) {
            return response(['error' => true, 'error_message' => $validation->messages()]);
        }
		else {
			 return response(array('status' => true, 'success_message' => 'Cuppon code send to your whats app number','is_relode'=>'no'));
		}

       	
            
     }

    public function submitOtp(Request $request)
    {
		
        $validation = validator::make($request->all(), [
            'otp' => 'required|numeric|digits:4',
        ]);

        if ($validation->fails()) {
            return response(['error' => true, 'error_message' => $validation->messages()]);
        }

        $ReachUs = ReachUs::where('id', $request->reachus_id)->where('otp', $request->otp)->first();
		
		$FranchiseFinancial = FranchiseFinancial::where('id', $request->Franchise_id)->where('otp', $request->otp)->first();
        
        if ($ReachUs) {
            $this->sendCuppon($request, $ReachUs);
			
			$mailData = array('email' => 'full_name');
			$email = $ReachUs->email; //test xyz>
			$mail_data_admin = array('name' => $ReachUs->full_name, 'mobile_number' => $ReachUs->mobile_number, 'email' => $ReachUs->email, 'date' => date('Y-m-d'),'page_title' => 'Home Page','coupon' => $ReachUs->coupon_code, 'domain' => 'Wigomania.com', 'countryCode' => $ReachUs->dial_code, 'help' => $ReachUs->purpose_of_enquery,'Comingfrom'=>$ReachUs->comingfrom);
		if($request->frmtype == 'reachus'){
			Mail::send('frontend.mail.reachus', $mail_data_admin, function ($message) use ($email) {
				$message->to($email, 'Reach Us')->subject('Reach Us');
				$message->from('support@wigomania.com', config('app.name'));
			});
		}
		else
		{
			
			Mail::send('frontend.mail.coupon', $mail_data_admin, function ($message) use ($email) {
            $message->to($email, 'Coupons')->subject('Coupons Request');
            $message->from('support@wigomania.com', config('app.name'));
        });
		}
        

        $mail_data_admin = array('name' => $ReachUs->full_name, 'mobile_number' => $ReachUs->mobile_number, 'email' => $ReachUs->email, 'date' => date('Y-m-d'),'page_title' => 'Home Page','coupon' => $ReachUs->coupon_code, 'domain' => 'Wigomania.com', 'countryCode' => $ReachUs->dial_code, 'help' => $ReachUs->purpose_of_enquery,'Comingfrom'=>$ReachUs->comingfrom);
		
		if($request->frmtype=='reachus')
		{
			Mail::send('frontend.mail.reachus', $mail_data_admin, function ($message) use ($email) {
            $message->to('support@wigomania.com', ' Reach Us')->subject('Reach Us');
            $message->from('support@wigomania.com', config('app.name'));
			});
		}
		else{
			Mail::send('frontend.mail.coupon', $mail_data_admin, function ($message) use ($email) {
            $message->to('support@wigomania.com', ' Coupons Request')->subject('Coupons Request');
            $message->from('support@wigomania.com', config('app.name'));
			});
			
		}		
		
            return response(array('status' => true, 'success_message' => 'Cuppon code send to your whats app number','is_relode'=>'yes','coupon' => $ReachUs->coupon_code));
       }else if($FranchiseFinancial){
		  
		   $email = $request->email;
		   
		   $mail_data_Customer = array('name' => $request->full_name, 'mobile_number' => $request->contact_number, 'email' => $request->email, 'qualification' =>$request->qualification,'management_experirnce' => $request->management_experirnce, 'achivements' => $request->achivements,'why_wigomania'=>$request->why_wigomania,'believe'=>$request->believe);
		 
			Mail::send('frontend.mail.Franchises_user', $mail_data_Customer, function ($message) use ($email) {
				$message->to($email, ' Booking Revert')->subject('Franchise inquiry');
				$message->from('support@wigomania.com', config('app.name'));
			});
			Mail::send('frontend.mail.Franchises_admin', $mail_data_Customer, function ($message) use ($email) {
				$message->to('support@wigomania.com', ' Booking Request')->subject('Franchise inquiry');
				$message->from('support@wigomania.com', config('app.name'));
			});
			return response(array('status' => true,'is_relode'=>'yes'));
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
                        "name": "website_coupon_code",
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