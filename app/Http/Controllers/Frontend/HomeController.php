<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
use App\Models\{PageSection, BookAnAppointment, Review, LocationGallery, ProductCategory, Page, Visiter, PageSetting,Reviews,ProductGallery};
use Illuminate\Support\Facades\Validator;
Use Mail;
Use DB;
class HomeController extends Controller
{
    public function index(Request $request)
    {
        app('mathcaptcha')->reset();
		
        $PageSections = PageSection::where('page_id', 1)->with('sectionList')->get();
        $PageSetting = PageSetting::where('section_id', 26)->first();
        $Page = Page::where('id', 1)->first();
        $Reviews = Review::limit(9)->where('home_page', 1)->orderBy('review_date', 'desc')->get();
        $GalleryChennai = LocationGallery::where('location', 'chennai')->limit(6)->get();
        $GalleryHyderabad = LocationGallery::where('location', 'hydrabad')->limit(6)->get();
        $Gallerycoimbatore = LocationGallery::where('location', 'coimbatore')->limit(6)->get();
        $ProductCategory = ProductCategory::get();
		//$ip = file_get_contents('https://api.ipify.org');
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			//$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} else {
		$ip = $_SERVER['REMOTE_ADDR'];
		}
		$ip = $_SERVER['REMOTE_ADDR'];
//echo $ip;exit;
		//$ipDetails = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
		$location = '';//$ipDetails->city . ', ' . $ipDetails->regionName . ', ' . $ipDetails->country;
		Visiter::create(['ip_address' => $ip, 'location' => $location, 'visitDate' => date('Y-m-d'), 'visitDatetime' => date('Y-m-d H:i:s')]);

        return view('frontend.index', compact('PageSections', 'Reviews', 'GalleryChennai', 'GalleryHyderabad','Gallerycoimbatore', 'ProductCategory', 'Page', 'PageSetting'));
    } 
	
	public function menswigs(Request $request, $slug='mens-wig')
    {
        app('mathcaptcha')->reset();
		 $Products = ProductCategory::with([
            'products' => function ($query) {
                $query->orderBy('order_by', 'ASC');
            }
        ])->where('slug', $slug)->first();
        $PageSections = PageSection::where('page_id', 1)->with('sectionList')->get();
        $PageSetting = PageSetting::where('section_id', 26)->first();
        $Page = Page::where('id', 1)->first();
        //$Reviews = Review::limit(9)->where('home_page', 1)->orderBy('review_date', 'desc')->get();
		$Reviews = Review::limit(9)->where('product_id', $Products->id)->where('is_verified', 1)->get();
        $GalleryChennai = LocationGallery::where('location', 'chennai')->limit(6)->get();
        $GalleryHyderabad = LocationGallery::where('location', 'hydrabad')->limit(6)->get();
        $Gallerycoimbatore = LocationGallery::where('location', 'coimbatore')->limit(6)->get();
        $ProductCategory = ProductCategory::get();
		//$ip = file_get_contents('https://api.ipify.org');
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			//$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} else {
		$ip = $_SERVER['REMOTE_ADDR'];
		}
		$ip = $_SERVER['REMOTE_ADDR'];
//echo $ip;exit;
		$location = '';
		Visiter::create(['ip_address' => $ip, 'location' => $location, 'visitDate' => date('Y-m-d'), 'visitDatetime' => date('Y-m-d H:i:s')]);

        return view('frontend.hairwigs', compact('Products','PageSections', 'Reviews', 'GalleryChennai', 'GalleryHyderabad','Gallerycoimbatore', 'ProductCategory', 'Page', 'PageSetting'));
    }
	public function menswigstest(Request $request, $slug='mens-wig')
    {
        app('mathcaptcha')->reset();
		 $Products = ProductCategory::with([
            'products' => function ($query) {
                $query->orderBy('order_by', 'ASC');
            }
        ])->where('slug', $slug)->first();
        $PageSections = PageSection::where('page_id', 1)->with('sectionList')->get();
        $PageSetting = PageSetting::where('section_id', 26)->first();
        $Page = Page::where('id', 1)->first();
        //$Reviews = Review::limit(9)->where('home_page', 1)->orderBy('review_date', 'desc')->get();
		$Reviews = Review::limit(9)->where('product_id', $Products->id)->where('is_verified', 1)->get();
        $GalleryChennai = LocationGallery::where('location', 'chennai')->limit(6)->get();
        $GalleryHyderabad = LocationGallery::where('location', 'hydrabad')->limit(6)->get();
        $Gallerycoimbatore = LocationGallery::where('location', 'coimbatore')->limit(6)->get();
        $ProductCategory = ProductCategory::get();
		//$ip = file_get_contents('https://api.ipify.org');
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			//$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} else {
		$ip = $_SERVER['REMOTE_ADDR'];
		}
		$ip = $_SERVER['REMOTE_ADDR'];
//echo $ip;exit;
		$location = '';
		Visiter::create(['ip_address' => $ip, 'location' => $location, 'visitDate' => date('Y-m-d'), 'visitDatetime' => date('Y-m-d H:i:s')]);

        return view('frontend.hairwigstest', compact('Products','PageSections', 'Reviews', 'GalleryChennai', 'GalleryHyderabad','Gallerycoimbatore', 'ProductCategory', 'Page', 'PageSetting'));
    }
	
	public function menswigshyd(Request $request, $slug='mens-wig')
    {
        app('mathcaptcha')->reset();
		 $Products = ProductCategory::with([
            'products' => function ($query) {
                $query->orderBy('order_by', 'ASC');
            }
        ])->where('slug', $slug)->first();
        $PageSections = PageSection::where('page_id', 1)->with('sectionList')->get();
        $PageSetting = PageSetting::where('section_id', 26)->first();
        $Page = Page::where('id', 1)->first();
        //$Reviews = Review::limit(9)->where('home_page', 1)->orderBy('review_date', 'desc')->get();
		$Reviews = Review::limit(9)->where('product_id', $Products->id)->where('is_verified', 1)->get();
        $GalleryChennai = LocationGallery::where('location', 'chennai')->limit(6)->get();
        $GalleryHyderabad = LocationGallery::where('location', 'hydrabad')->limit(6)->get();
        $Gallerycoimbatore = LocationGallery::where('location', 'coimbatore')->limit(6)->get();
        $ProductCategory = ProductCategory::get();
		//$ip = file_get_contents('https://api.ipify.org');
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			//$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} else {
		$ip = $_SERVER['REMOTE_ADDR'];
		}
		$ip = $_SERVER['REMOTE_ADDR'];
//echo $ip;exit;
		$location = '';
		Visiter::create(['ip_address' => $ip, 'location' => $location, 'visitDate' => date('Y-m-d'), 'visitDatetime' => date('Y-m-d H:i:s')]);

        return view('frontend.hairwigshyd', compact('Products','PageSections', 'Reviews', 'GalleryChennai', 'GalleryHyderabad','Gallerycoimbatore', 'ProductCategory', 'Page', 'PageSetting'));
    }
	
	public function womenwigs(Request $request, $slug='ladies-wigs'){
        app('mathcaptcha')->reset();
		$Products = ProductCategory::with([
            'products' => function ($query) {
                $query->orderBy('order_by', 'ASC');
            }
        ])->where('slug', $slug)->first();
        $PageSections = PageSection::where('page_id', 1)->with('sectionList')->get();
        $PageSetting = PageSetting::where('section_id', 26)->first();
        $Page = Page::where('id', 1)->first();
        //$Reviews = Review::limit(9)->where('home_page', 1)->orderBy('review_date', 'desc')->get();
		$Reviews = Review::limit(9)->where('product_id', $Products->id)->where('is_verified', 1)->get();
        $GalleryChennai = LocationGallery::where('location', 'chennai')->limit(6)->get();
        $GalleryHyderabad = LocationGallery::where('location', 'hydrabad')->limit(6)->get();
        $Gallerycoimbatore = LocationGallery::where('location', 'coimbatore')->limit(6)->get();
        $ProductCategory = ProductCategory::get();
		//$ip = file_get_contents('https://api.ipify.org');
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			//$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} else {
		$ip = $_SERVER['REMOTE_ADDR'];
		}
		$ip = $_SERVER['REMOTE_ADDR'];
//echo $ip;exit;
		$location = '';
		Visiter::create(['ip_address' => $ip, 'location' => $location, 'visitDate' => date('Y-m-d'), 'visitDatetime' => date('Y-m-d H:i:s')]);

        return view('frontend.hairwigswomen', compact('Products','PageSections', 'Reviews', 'GalleryChennai', 'GalleryHyderabad','Gallerycoimbatore', 'ProductCategory', 'Page', 'PageSetting'));
    }
	public function womenwigshyd(Request $request, $slug='ladies-wigs'){
        app('mathcaptcha')->reset();
		$Products = ProductCategory::with([
            'products' => function ($query) {
                $query->orderBy('order_by', 'ASC');
            }
        ])->where('slug', $slug)->first();
        $PageSections = PageSection::where('page_id', 1)->with('sectionList')->get();
        $PageSetting = PageSetting::where('section_id', 26)->first();
        $Page = Page::where('id', 1)->first();
        //$Reviews = Review::limit(9)->where('home_page', 1)->orderBy('review_date', 'desc')->get();
		$Reviews = Review::limit(9)->where('product_id', $Products->id)->where('is_verified', 1)->get();
        $GalleryChennai = LocationGallery::where('location', 'chennai')->limit(6)->get();
        $GalleryHyderabad = LocationGallery::where('location', 'hydrabad')->limit(6)->get();
        $Gallerycoimbatore = LocationGallery::where('location', 'coimbatore')->limit(6)->get();
        $ProductCategory = ProductCategory::get();
		//$ip = file_get_contents('https://api.ipify.org');
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			//$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} else {
		$ip = $_SERVER['REMOTE_ADDR'];
		}
		$ip = $_SERVER['REMOTE_ADDR'];
//echo $ip;exit;
		$location = '';
		Visiter::create(['ip_address' => $ip, 'location' => $location, 'visitDate' => date('Y-m-d'), 'visitDatetime' => date('Y-m-d H:i:s')]);

        return view('frontend.hairwigswomenhyd', compact('Products','PageSections', 'Reviews', 'GalleryChennai', 'GalleryHyderabad','Gallerycoimbatore', 'ProductCategory', 'Page', 'PageSetting'));
    }
	
	public function topperlandingCh(Request $request, $slug='closures-toppers'){
        app('mathcaptcha')->reset();
		$Products = ProductCategory::with([
            'products' => function ($query) {
                $query->orderBy('order_by', 'ASC');
            }
        ])->where('slug', $slug)->first();
        $PageSections = PageSection::where('page_id', 1)->with('sectionList')->get();
        $PageSetting = PageSetting::where('section_id', 26)->first();
        $Page = Page::where('id', 1)->first();
        //$Reviews = Review::limit(9)->where('home_page', 1)->orderBy('review_date', 'desc')->get();
		$Reviews = Review::limit(9)->where('product_id', $Products->id)->where('is_verified', 1)->get();
        $GalleryChennai = LocationGallery::where('location', 'chennai')->limit(6)->get();
        $GalleryHyderabad = LocationGallery::where('location', 'hydrabad')->limit(6)->get();
        $Gallerycoimbatore = LocationGallery::where('location', 'coimbatore')->limit(6)->get();
        $ProductCategory = ProductCategory::get();
		//$ip = file_get_contents('https://api.ipify.org');
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			//$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} else {
		$ip = $_SERVER['REMOTE_ADDR'];
		}
		$ip = $_SERVER['REMOTE_ADDR'];
//echo $ip;exit;
		$location = '';
		Visiter::create(['ip_address' => $ip, 'location' => $location, 'visitDate' => date('Y-m-d'), 'visitDatetime' => date('Y-m-d H:i:s')]);

        return view('frontend.hairtopperch', compact('Products','PageSections', 'Reviews', 'GalleryChennai', 'GalleryHyderabad','Gallerycoimbatore', 'ProductCategory', 'Page', 'PageSetting'));
    }
	public function topperlandingHYD(Request $request, $slug='closures-toppers'){
        app('mathcaptcha')->reset();
		$Products = ProductCategory::with([
            'products' => function ($query) {
                $query->orderBy('order_by', 'ASC');
            }
        ])->where('slug', $slug)->first();
        $PageSections = PageSection::where('page_id', 1)->with('sectionList')->get();
        $PageSetting = PageSetting::where('section_id', 26)->first();
        $Page = Page::where('id', 1)->first();
        //$Reviews = Review::limit(9)->where('home_page', 1)->orderBy('review_date', 'desc')->get();
		$Reviews = Review::limit(9)->where('product_id', $Products->id)->where('is_verified', 1)->get();
        $GalleryChennai = LocationGallery::where('location', 'chennai')->limit(6)->get();
        $GalleryHyderabad = LocationGallery::where('location', 'hydrabad')->limit(6)->get();
        $Gallerycoimbatore = LocationGallery::where('location', 'coimbatore')->limit(6)->get();
        $ProductCategory = ProductCategory::get();
		//$ip = file_get_contents('https://api.ipify.org');
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			//$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} else {
		$ip = $_SERVER['REMOTE_ADDR'];
		}
		$ip = $_SERVER['REMOTE_ADDR'];
//echo $ip;exit;
		$location = '';
		Visiter::create(['ip_address' => $ip, 'location' => $location, 'visitDate' => date('Y-m-d'), 'visitDatetime' => date('Y-m-d H:i:s')]);

        return view('frontend.hairtopperhyd', compact('Products','PageSections', 'Reviews', 'GalleryChennai', 'GalleryHyderabad','Gallerycoimbatore', 'ProductCategory', 'Page', 'PageSetting'));
    }
	
	
	public function extensionlandingCh(Request $request, $slug='hair-extensions'){
        app('mathcaptcha')->reset();
		$Products = ProductCategory::with([
            'products' => function ($query) {
                $query->orderBy('order_by', 'ASC');
            }
        ])->where('slug', $slug)->first();
        $PageSections = PageSection::where('page_id', 1)->with('sectionList')->get();
        $PageSetting = PageSetting::where('section_id', 26)->first();
        $Page = Page::where('id', 1)->first();
        //$Reviews = Review::limit(9)->where('home_page', 1)->orderBy('review_date', 'desc')->get();
		$Reviews = Review::limit(9)->where('product_id', $Products->id)->where('is_verified', 1)->get();
        $GalleryChennai = LocationGallery::where('location', 'chennai')->limit(6)->get();
        $GalleryHyderabad = LocationGallery::where('location', 'hydrabad')->limit(6)->get();
        $Gallerycoimbatore = LocationGallery::where('location', 'coimbatore')->limit(6)->get();
        $ProductCategory = ProductCategory::get();
		//$ip = file_get_contents('https://api.ipify.org');
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			//$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} else {
		$ip = $_SERVER['REMOTE_ADDR'];
		}
		$ip = $_SERVER['REMOTE_ADDR'];
//echo $ip;exit;
		$location = '';
		Visiter::create(['ip_address' => $ip, 'location' => $location, 'visitDate' => date('Y-m-d'), 'visitDatetime' => date('Y-m-d H:i:s')]);

        return view('frontend.hairextesionadsch', compact('Products','PageSections', 'Reviews', 'GalleryChennai', 'GalleryHyderabad','Gallerycoimbatore', 'ProductCategory', 'Page', 'PageSetting'));
    }
	
	public function extensionlandingChhyd(Request $request, $slug='hair-extensions'){
        app('mathcaptcha')->reset();
		$Products = ProductCategory::with([
            'products' => function ($query) {
                $query->orderBy('order_by', 'ASC');
            }
        ])->where('slug', $slug)->first();
        $PageSections = PageSection::where('page_id', 1)->with('sectionList')->get();
        $PageSetting = PageSetting::where('section_id', 26)->first();
        $Page = Page::where('id', 1)->first();
        //$Reviews = Review::limit(9)->where('home_page', 1)->orderBy('review_date', 'desc')->get();
		$Reviews = Review::limit(9)->where('product_id', $Products->id)->where('is_verified', 1)->get();
        $GalleryChennai = LocationGallery::where('location', 'chennai')->limit(6)->get();
        $GalleryHyderabad = LocationGallery::where('location', 'hydrabad')->limit(6)->get();
        $Gallerycoimbatore = LocationGallery::where('location', 'coimbatore')->limit(6)->get();
        $ProductCategory = ProductCategory::get();
		//$ip = file_get_contents('https://api.ipify.org');
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			//$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} else {
		$ip = $_SERVER['REMOTE_ADDR'];
		}
		$ip = $_SERVER['REMOTE_ADDR'];
//echo $ip;exit;
		$location = '';
		Visiter::create(['ip_address' => $ip, 'location' => $location, 'visitDate' => date('Y-m-d'), 'visitDatetime' => date('Y-m-d H:i:s')]);

        return view('frontend.hairextesionadshyd', compact('Products','PageSections', 'Reviews', 'GalleryChennai', 'GalleryHyderabad','Gallerycoimbatore', 'ProductCategory', 'Page', 'PageSetting'));
    }
	
	public function patchlandingCh(Request $request, $slug='mens-wig'){
        app('mathcaptcha')->reset();
		$Products = ProductCategory::with([
            'products' => function ($query) {
                $query->orderBy('order_by', 'ASC');
            }
        ])->where('slug', $slug)->first();
        $PageSections = PageSection::where('page_id', 1)->with('sectionList')->get();
        $PageSetting = PageSetting::where('section_id', 26)->first();
        $Page = Page::where('id', 1)->first();
        //$Reviews = Review::limit(9)->where('home_page', 1)->orderBy('review_date', 'desc')->get();
		$Reviews = Review::limit(9)->where('product_id', $Products->id)->where('is_verified', 1)->get();
        $GalleryChennai = LocationGallery::where('location', 'chennai')->limit(6)->get();
        $GalleryHyderabad = LocationGallery::where('location', 'hydrabad')->limit(6)->get();
        $Gallerycoimbatore = LocationGallery::where('location', 'coimbatore')->limit(6)->get();
        $ProductCategory = ProductCategory::get();
		//$ip = file_get_contents('https://api.ipify.org');
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			//$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} else {
		$ip = $_SERVER['REMOTE_ADDR'];
		}
		$ip = $_SERVER['REMOTE_ADDR'];
//echo $ip;exit;
		$location = '';
		Visiter::create(['ip_address' => $ip, 'location' => $location, 'visitDate' => date('Y-m-d'), 'visitDatetime' => date('Y-m-d H:i:s')]);

        return view('frontend.hairpatchmench', compact('Products','PageSections', 'Reviews', 'GalleryChennai', 'GalleryHyderabad','Gallerycoimbatore', 'ProductCategory', 'Page', 'PageSetting'));
    }
	public function patchlandinghyd(Request $request, $slug='mens-wig'){
        app('mathcaptcha')->reset();
		$Products = ProductCategory::with([
            'products' => function ($query) {
                $query->orderBy('order_by', 'ASC');
            }
        ])->where('slug', $slug)->first();
        $PageSections = PageSection::where('page_id', 1)->with('sectionList')->get();
        $PageSetting = PageSetting::where('section_id', 26)->first();
        $Page = Page::where('id', 1)->first();
        //$Reviews = Review::limit(9)->where('home_page', 1)->orderBy('review_date', 'desc')->get();
		$Reviews = Review::limit(9)->where('product_id', $Products->id)->where('is_verified', 1)->get();
        $GalleryChennai = LocationGallery::where('location', 'chennai')->limit(6)->get();
        $GalleryHyderabad = LocationGallery::where('location', 'hydrabad')->limit(6)->get();
        $Gallerycoimbatore = LocationGallery::where('location', 'coimbatore')->limit(6)->get();
        $ProductCategory = ProductCategory::get();
		//$ip = file_get_contents('https://api.ipify.org');
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			//$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} else {
		$ip = $_SERVER['REMOTE_ADDR'];
		}
		$ip = $_SERVER['REMOTE_ADDR'];
//echo $ip;exit;
		$location = '';
		Visiter::create(['ip_address' => $ip, 'location' => $location, 'visitDate' => date('Y-m-d'), 'visitDatetime' => date('Y-m-d H:i:s')]);

        return view('frontend.hairpatchmenhyd', compact('Products','PageSections', 'Reviews', 'GalleryChennai', 'GalleryHyderabad','Gallerycoimbatore', 'ProductCategory', 'Page', 'PageSetting'));
    }

    public function sign(Request $request)
    {
        return view('frontend.sign');
    }

    public function signature(Request $request)
    {
        $folderPath = "upload/";
        $image_parts = explode(";base64,", $_POST['signature_image']);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath . uniqid() . '.' . $image_type;
        file_put_contents($file, $image_base64);
        return;
    }

    public function sitemap(Request $request)
    {
        app('mathcaptcha')->reset();
        $Page = Page::where('id', 8)->first();
        $PageSections = PageSection::where('page_id', 8)->with('sectionList')->get();
        return view('frontend.sitemap', compact('PageSections', 'Page'));
    }

    public function bookAnAppointment(Request $request)
    {
        $validation = validator::make($request->all(), [
            'full_name' => 'required|max:100',
            'mobile_number' => 'required|numeric|digits:10',
            'email' => 'required|email',
            'purpose' => 'required',
            'date' => 'required',
			'mathcaptcha' => 'required|mathcaptcha'
        ], [
                'mathcaptcha.required' => 'The recaptcha is required',
                'mathcaptcha.mathcaptcha' => 'Please correct answer'
        ]);
        if ($validation->fails()) { 
            return response(['error' => true, 'error_message' => $validation->messages()]);
        }
		
        $BookAnAppointment = new BookAnAppointment();
        $BookAnAppointment->full_name = $request->full_name;
        $BookAnAppointment->mobile_number = $request->mobile_number;
        $BookAnAppointment->email = $request->email;
        $BookAnAppointment->dial_code = $request->dial_code ? $request->dial_code : '91';
        $BookAnAppointment->country_data = $request->country_data;
        $BookAnAppointment->purpose = $request->purpose;
        $BookAnAppointment->date = $request->date;
        $BookAnAppointment->save();
    
        $mailData = array('email' => 'full_name');
        $email = $request->email; //test xyz>
		$AppointmentDate = date("d-m-Y", strtotime($request->date));
		$mail_data_Customer = array('name' => $request->full_name, 'mobile_number' => $request->mobile_number, 'email' => $request->email, 'date' =>$AppointmentDate,'page_title' => 'Booking Appointment', 'countryCode' => $request->dial_code,'purpose'=>$request->purpose);
        Mail::send('frontend.mail.Appointment_user', $mail_data_Customer, function ($message) use ($email) {
            $message->to($email, ' Booking Revert')->subject('Booking Request');
            $message->from('support@wigomania.com', config('app.name'));
        });

        $mail_data_admin = array('name' => $request->full_name, 'mobile_number' => $request->mobile_number, 'email' => $request->email, 'date' =>$AppointmentDate,'page_title' => 'Home Page','coupon' => $request->coupon_code, 'domain' => 'Wigomania.com', 'countryCode' => $request->dial_code,'purpose'=>$request->purpose);

        Mail::send('frontend.mail.Appointment_admin', $mail_data_admin, function ($message) use ($email) {
            $message->to('support@wigomania.com', ' Booking Request')->subject('Booking Request');
            $message->from('support@wigomania.com', config('app.name'));
        });
        return response(['success' => true, 'success_message' => 'Book An Appointment Success fully done!']);
    }

    public function thanku()
    {
        return view('frontend.thanku');
    }
	public function hairwigs()
    {
        $country = DB::table('countries')->get();
        $Reviews = Reviews::orderBy('reviews_id', 'DESC')->limit(6)->get();
		return view('frontend.hairwigs')->with(compact('Reviews','country'));
    }
	public function menhairsystems()
    {
        $country = DB::table('countries')->get();
        $Reviews = Reviews::orderBy('reviews_id', 'DESC')->limit(6)->get();
		return view('frontend.menhairsystems')->with(compact('Reviews','country'));
    }
	public function scantyhair()
    {
        $country = DB::table('countries')->get();
        $Reviews = Reviews::orderBy('reviews_id', 'DESC')->limit(6)->get();
		return view('frontend.scantyhair')->with(compact('Reviews','country'));
    }
	public function hairextension()
    {
        $country = DB::table('countries')->get();
        $Reviews = Reviews::orderBy('reviews_id', 'DESC')->limit(6)->get();
		return view('frontend.hairextension')->with(compact('Reviews','country'));
    }


    public function bookingThanku()
    {
        return view('frontend.booking_thanku');
    }
	
	public function exportdata()
	{
		$startDate = Carbon::now()->subDays(10)->startOfDay();
        $endDate = Carbon::now()->endOfDay();

        //$data = Visiter::whereBetween('created_at', [$startDate, $endDate])->get();
		$data = Visiter::select('visitDate', 'ip_address', DB::raw('count(id) as totalclick'), DB::raw('location'))
		->groupBy('ip_address', 'visitDate', 'location')
		//->groupBy('visitDate')
		->orderByDesc('totalclick')
		->whereBetween('created_at', [$startDate, $endDate])->get();
        $csvData = [];
        $csvData[] = ['IP Address', 'Visit Date', 'Total Click', 'Location']; // Replace with your column names

        foreach ($data as $item) {
            // Adjust the column names and data according to your model
            $csvData[] = [$item->ip_address, $item->visitDate, $item->totalclick, $item->location];
        }

        $filename = 'export_data_' . Carbon::now()->format('Ymd_His') . '.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="'.$filename.'"',
        ];

        return Response::stream(function() use ($csvData) {
            $file = fopen('php://output', 'w');
            foreach ($csvData as $row) {
                fputcsv($file, $row);
            }
            fclose($file);
        }, 200, $headers);
	}
}