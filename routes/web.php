<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
// use App\Http\Controllers\Admin\RestaurantController as AdminRestaurantController;
// use App\Http\Controllers\Restaurant\AuthController as RestaurantAuthController;
// use App\Http\Controllers\Restaurant\DashboardController as RestaurantDashboardController;
use App\Http\Controllers\Admin\AgentController as AdminAgentController;
use App\Http\Controllers\Admin\AdminProfileController as AdminProfileController;
use App\Http\Controllers\Admin\RoleController as AdminRoleController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\ReviewController as AdminReviewController;
use App\Http\Controllers\Admin\LocationGalleryController as AdminLocationGalleryController;
use App\Http\Controllers\Admin\GeneralSettingController as AdminGeneralSettingController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\ProductCategoryController as AdminProductCategoryController;
use App\Http\Controllers\Admin\OurTeamController as AdminOurTeamController;
use App\Http\Controllers\Admin\CsrController as AdminCsrController;
use App\Http\Controllers\Admin\PartnerOpportunityController as AdminPartnerOpportunityController;
use App\Http\Controllers\Admin\FinancialController as AdminFinancialController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\ReachUsController as AdminReachUsController;
use App\Http\Controllers\Admin\GalleryCategoryController as AdminGalleryCategoryController;
use App\Http\Controllers\Admin\BookAnAppointmentController as AdminBookAnAppointmentController;


use App\Http\Controllers\Frontend\{BehindTheBrandController as FrontendBehindTheBrandController, OurForteController as FrontendOurForteController, OurStudioController as FrontendOurStudioController, ReviewController as FrontendReviewController, PartnerShipController as FrontendPartnerShipController, CSRController as FrontendCsrController, GalleryController as FrontendGalleryController, ContactUsController as FrontendContactUsController, HomeController as FrontendHomeController, ProductController as FrontendProductController, NailExtensionController as FrontendNailExtensionController};
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\CustomLinkController;


/*
|--------------------------------------------------------------------------
| Web Routes
gallery|
| Here is where you can register web routes for you`r application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Admin
Route::prefix('admin')->name('admin.')->middleware(['web'])->group(function () {
    Route::get('/login', [AdminAuthController::class, 'index'])->name('index');
    Route::post('login', [AdminAuthController::class, 'login'])->name('login');
    Route::any('forget-password', [AdminAuthController::class, 'forgetPassword'])->name('forgetpassword');
    Route::any('reset-password/{email?}', [AdminAuthController::class, 'resetPassword'])->name('resetpassword');
    Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');
    // Menu Permission Group
    Route::middleware('IsPermission')->group(
        function () {
            Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
            Route::post('dashboard-brand', [AdminDashboardController::class, 'brand'])->name('dashboard.brand');

            /// admin profile
            Route::get('edit-profile', [AdminProfileController::class, 'edit'])->name('edit');
            Route::post('update-profile', [AdminProfileController::class, 'update'])->name('profile.update');
            /// change password
            Route::get('edit-password', [AdminProfileController::class, 'changePassword'])->name('edit-password');
            Route::post('update-password', [AdminProfileController::class, 'updatePassword'])->name('password.update');

            // Users Management
            Route::get('agent', [AdminAgentController::class, 'index'])->name('agent.index');
            Route::get('agent/add', [AdminAgentController::class, 'add'])->name('agent.add');
            Route::post('agent/store', [AdminAgentController::class, 'store'])->name('agent.store');
            Route::get('agent/indexList', [AdminAgentController::class, 'indexList'])->name('agent.indexList');
            Route::get('agent/edit/{id}', [AdminAgentController::class, 'edit'])->name('agent.edit');
            Route::post('agent/update', [AdminAgentController::class, 'update'])->name('agent.update');
            Route::get('agent/delete/{id}', [AdminAgentController::class, 'delete'])->name('agent.delete');

            // Role Management
            Route::get('role', [AdminRoleController::class, 'index'])->name('role.index');
            Route::get('role/add', [AdminRoleController::class, 'add'])->name('role.add');
            Route::post('role/store', [AdminRoleController::class, 'store'])->name('role.store');
            Route::get('role/indexList', [AdminRoleController::class, 'indexList'])->name('role.indexList');
            Route::get('role/edit/{id}', [AdminRoleController::class, 'edit'])->name('role.edit');
            Route::post('role/update', [AdminRoleController::class, 'update'])->name('role.update');
            Route::get('role/delete/{id}', [AdminRoleController::class, 'delete'])->name('role.delete');


            // Blog Routes

            Route::resource('blog-category',BlogCategoryController::class);
            Route::resource('blogs', AdminBlogController::class);
            Route::resource('custom-link', CustomLinkController::class);




            // Content Management System
            Route::get('page', [AdminPageController::class, 'index'])->name('page.index');
            Route::get('page-index-list', [AdminPageController::class, 'indexList'])->name('page.indexList');
            Route::get('page-edit/{id}', [AdminPageController::class, 'edit'])->name('page.edit');
            Route::post('page-update', [AdminPageController::class, 'update'])->name('page.update');
            Route::post('page-update-slider', [AdminPageController::class, 'updateSlider'])->name('page.updateSlider');
            Route::get('page-section-index/{id}', [AdminPageController::class, 'pageSection'])->name('page.pageSection');
            Route::get('page-section-indexList/{id}', [AdminPageController::class, 'pageSectionList'])->name('page.pageSectionList');
            Route::any('page-meta-tag/{id}', [AdminPageController::class, 'metaTag'])->name('page.metaTag');

            // Review Management
            Route::get('review', [AdminReviewController::class, 'index'])->name('review.index');
            Route::get('review/add', [AdminReviewController::class, 'add'])->name('review.add');
            Route::post('review/store', [AdminReviewController::class, 'store'])->name('review.store');
            Route::get('review/indexList', [AdminReviewController::class, 'indexList'])->name('review.indexList');
            Route::get('review/edit/{id}', [AdminReviewController::class, 'edit'])->name('review.edit');
            Route::post('review/update', [AdminReviewController::class, 'update'])->name('review.update');
            Route::get('review/delete/{id}', [AdminReviewController::class, 'delete'])->name('review.delete');


            // Review Management
            Route::get('location-gallery', [AdminLocationGalleryController::class, 'index'])->name('location_gallery.index');
            Route::get('location-gallery/add', [AdminLocationGalleryController::class, 'add'])->name('location_gallery.add');
            Route::post('location-gallery/store', [AdminLocationGalleryController::class, 'store'])->name('location_gallery.store');
            Route::get('location-gallery/indexList', [AdminLocationGalleryController::class, 'indexList'])->name('location_gallery.indexList');
            Route::get('location-gallery/edit/{id}', [AdminLocationGalleryController::class, 'edit'])->name('location_gallery.edit');
            Route::post('location-gallery/update', [AdminLocationGalleryController::class, 'update'])->name('location_gallery.update');
            Route::get('location-gallery/delete/{id}', [AdminLocationGalleryController::class, 'delete'])->name('location_gallery.delete');

            // Review Management
            Route::get('gallery-category', [AdminGalleryCategoryController::class, 'index'])->name('gallery_category.index');
            Route::get('gallery-category/add', [AdminGalleryCategoryController::class, 'add'])->name('gallery_category.add');
            Route::post('gallery-category/store', [AdminGalleryCategoryController::class, 'store'])->name('gallery_category.store');
            Route::get('gallery-category/indexList', [AdminGalleryCategoryController::class, 'indexList'])->name('gallery_category.indexList');
            Route::get('gallery-category/edit/{id}', [AdminGalleryCategoryController::class, 'edit'])->name('gallery_category.edit');
            Route::post('gallery-category/update', [AdminGalleryCategoryController::class, 'update'])->name('gallery_category.update');
            Route::get('gallery-category/delete/{id}', [AdminGalleryCategoryController::class, 'delete'])->name('gallery_category.delete');

            // Review Management
            Route::get('gallery', [AdminGalleryController::class, 'index'])->name('galleries.index');
            Route::get('gallery/add', [AdminGalleryController::class, 'add'])->name('galleries.add');
            Route::post('gallery/store', [AdminGalleryController::class, 'store'])->name('galleries.store');
            Route::get('gallery/indexList', [AdminGalleryController::class, 'indexList'])->name('galleries.indexList');
            Route::get('gallery/edit/{id}', [AdminGalleryController::class, 'edit'])->name('galleries.edit');
            Route::post('gallery/update', [AdminGalleryController::class, 'update'])->name('galleries.update');
            Route::get('gallery/delete/{id}', [AdminGalleryController::class, 'delete'])->name('galleries.delete');



            // General Setting
            Route::any('general-setting/', [AdminGeneralSettingController::class, 'setting'])->name('general.setting');

            // Product Category Management
            Route::get('product-category', [AdminProductCategoryController::class, 'index'])->name('product_category.index');
            Route::get('product-category/add', [AdminProductCategoryController::class, 'add'])->name('product_category.add');
            Route::post('product-category/store', [AdminProductCategoryController::class, 'store'])->name('product_category.store');
            Route::get('product-category/indexList', [AdminProductCategoryController::class, 'indexList'])->name('product_category.indexList');
            Route::get('product-category/edit/{id}', [AdminProductCategoryController::class, 'edit'])->name('product_category.edit');
            Route::post('product-category/update', [AdminProductCategoryController::class, 'update'])->name('product_category.update');
            Route::post('product-category/delete-gallery/', [AdminProductCategoryController::class, 'deleteGallery'])->name('product_category.delete.gallery');


            // Product Management
            Route::get('product', [AdminProductController::class, 'index'])->name('product.index');
            Route::get('product/add', [AdminProductController::class, 'add'])->name('product.add');
            Route::post('product/store', [AdminProductController::class, 'store'])->name('product.store');
            Route::get('product/indexList', [AdminProductController::class, 'indexList'])->name('product.indexList');
            Route::get('product/edit/{id}', [AdminProductController::class, 'edit'])->name('product.edit');
            Route::post('product/update', [AdminProductController::class, 'update'])->name('product.update');
            Route::any('product/product-delete/{id}', [AdminProductController::class, 'productDelete'])->name('product.delete');
            Route::any('product-how-does-its-work/{slug}', [AdminProductController::class, 'howDoesItWork'])->name('product.addon');
            Route::any('product-how-does-its-work-delete', [AdminProductController::class, 'howDoesItWorkDelete'])->name('product.addonDelete');
            Route::post('product/delete-gallery/', [AdminProductController::class, 'deleteGallery'])->name('product.delete.gallery');

            // Our Team Management
            Route::get('our-team', [AdminOurTeamController::class, 'index'])->name('ourteam.index');
            Route::get('our-team/add', [AdminOurTeamController::class, 'add'])->name('ourteam.add');
            Route::post('our-team/store', [AdminOurTeamController::class, 'store'])->name('ourteam.store');
            Route::get('our-team/indexList', [AdminOurTeamController::class, 'indexList'])->name('ourteam.indexList');
            Route::get('our-team/edit/{id}', [AdminOurTeamController::class, 'edit'])->name('ourteam.edit');
            Route::post('our-team/update', [AdminOurTeamController::class, 'update'])->name('ourteam.update');
            Route::get('our-team/delete/{id}', [AdminOurTeamController::class, 'delete'])->name('ourteam.delete');

            // CSR Management
            Route::get('csr', [AdminCsrController::class, 'index'])->name('csr.index');
            Route::get('csr/add', [AdminCsrController::class, 'add'])->name('csr.add');
            Route::post('csr/store', [AdminCsrController::class, 'store'])->name('csr.store');
            Route::get('csr/indexList', [AdminCsrController::class, 'indexList'])->name('csr.indexList');
            Route::get('csr/edit/{id}', [AdminCsrController::class, 'edit'])->name('csr.edit');
            Route::post('csr/update', [AdminCsrController::class, 'update'])->name('csr.update');
            Route::get('csr/delete/{id}', [AdminCsrController::class, 'delete'])->name('csr.delete');

            // Message From Ceo
            Route::get('message-from-ceo', [AdminCsrController::class, 'messageFromCeoIndex'])->name('csr.messageFromCeoIndex');
            Route::get('message-from-ceo/edit/{id}', [AdminCsrController::class, 'messageFromCeoIndexEdit'])->name('csr.messageFromCeoIndexEdit');
            Route::post('message-from-ceo/update', [AdminCsrController::class, 'messageFromCeoIndexListUpdate'])->name('csr.messageFromCeoIndexListUpdate');
            Route::get('message-from-ceo/indexList', [AdminCsrController::class, 'messageFromCeoIndexList'])->name('csr.messageFromCeoIndexList');

            // Partner Oppurtinity
            Route::get('partner-opportunity', [AdminPartnerOpportunityController::class, 'index'])->name('opportunity.index');
            Route::get('partner-opportunity/add', [AdminPartnerOpportunityController::class, 'add'])->name('opportunity.add');
            Route::post('partner-opportunity/store', [AdminPartnerOpportunityController::class, 'store'])->name('opportunity.store');
            Route::get('partner-opportunity/indexList', [AdminPartnerOpportunityController::class, 'indexList'])->name('opportunity.indexList');
            Route::get('partner-opportunity/edit/{id}', [AdminPartnerOpportunityController::class, 'edit'])->name('opportunity.edit');
            Route::post('partner-opportunity/update', [AdminPartnerOpportunityController::class, 'update'])->name('opportunity.update');
            Route::get('partner-opportunity/delete/{id}', [AdminPartnerOpportunityController::class, 'delete'])->name('opportunity.delete');

            // Partner Oppurtinity
            Route::get('financial', [AdminFinancialController::class, 'index'])->name('financial.index');
            Route::get('financial/add', [AdminFinancialController::class, 'add'])->name('financial.add');
            Route::post('financial/store', [AdminFinancialController::class, 'store'])->name('financial.store');
            Route::get('financial/indexList', [AdminFinancialController::class, 'indexList'])->name('financial.indexList');
            Route::get('financial/show/{id}', [AdminFinancialController::class, 'show'])->name('financial.show');
            Route::post('financial/update', [AdminFinancialController::class, 'update'])->name('financial.update');
            Route::get('financial/delete/{id}', [AdminFinancialController::class, 'delete'])->name('financial.delete');

            // Book an Appointment
            Route::get('book-an-appointment', [AdminBookAnAppointmentController::class, 'index'])->name('BookAnAppointment.index');
            Route::get('book-an-appointment-add', [AdminBookAnAppointmentController::class, 'add'])->name('BookAnAppointment.add');
            Route::post('book-an-appointment-store', [AdminBookAnAppointmentController::class, 'store'])->name('BookAnAppointment.store');
            Route::get('book-an-appointment-index-list', [AdminBookAnAppointmentController::class, 'indexList'])->name('BookAnAppointment.indexList');
            Route::get('book-an-appointment-show/{id}', [AdminBookAnAppointmentController::class, 'show'])->name('BookAnAppointment.show');
            Route::post('book-an-appointment-update', [AdminBookAnAppointmentController::class, 'update'])->name('BookAnAppointment.update');
            Route::get('book-an-appointment-delete/{id}', [AdminBookAnAppointmentController::class, 'delete'])->name('BookAnAppointment.delete');

            // Partner Oppurtinity
            Route::get('reach-us', [AdminReachUsController::class, 'index'])->name('reachUs.index');
            Route::get('reach-us/add', [AdminReachUsController::class, 'add'])->name('reachUs.add');
            Route::post('reach-us/store', [AdminReachUsController::class, 'store'])->name('reachUs.store');
            Route::get('reach-us/indexList', [AdminReachUsController::class, 'indexList'])->name('reachUs.indexList');
            Route::get('reach-us/show/{id}', [AdminReachUsController::class, 'show'])->name('reachUs.show');
            Route::post('reach-us/update', [AdminReachUsController::class, 'update'])->name('reachUs.update');
            Route::get('reach-us/delete/{id}', [AdminReachUsController::class, 'delete'])->name('reachUs.delete');
        }
    );

});

// Route::get('/', [FrontendHomeController::class, 'sign'])->name('sign');
Route::get('/', [FrontendHomeController::class, 'index'])->name('home');



Route::get('/hairwigs', [FrontendHomeController::class, 'hairwigs'])->name('hairwigs');
Route::get('/menhairsystems', [FrontendHomeController::class, 'menhairsystems'])->name('menhairsystems');
Route::get('/scantyhair', [FrontendHomeController::class, 'scantyhair'])->name('scantyhair');
Route::get('/hairextension', [FrontendHomeController::class, 'hairextension'])->name('hairextension');
Route::get('/exportdata', [FrontendHomeController::class, 'exportdata'])->name('exportdata');
Route::get('home/{slug?}', [FrontendHomeController::class, 'index'])->name('home-old');
Route::get('thanku', [FrontendHomeController::class, 'thanku'])->name('thanku');
Route::get('booking-thanku', [FrontendHomeController::class, 'bookingThanku'])->name('bookingThanku');
Route::get('sitemap', [FrontendHomeController::class, 'sitemap'])->name('sitemap');
Route::get('behind-the-brand', [FrontendBehindTheBrandController::class, 'index'])->name('behindTheBrand');
Route::get('behind-the-brand-family', [FrontendBehindTheBrandController::class, 'behindTheBrandFamily'])->name('behindTheBrandFamily');
Route::get('our-forte', [FrontendOurForteController::class, 'index'])->name('ourForte');
Route::get('our-studio', [FrontendOurStudioController::class, 'index'])->name('ourStudio');
Route::get('review', [FrontendReviewController::class, 'index'])->name('review');
Route::get('customer-review', [FrontendReviewController::class, 'customerReview'])->name('customer.review');
Route::get('csr', [FrontendCsrController::class, 'index'])->name('csr');
Route::get('gallery', [FrontendGalleryController::class, 'index'])->name('gallery');
Route::get('reach-us', [FrontendContactUsController::class, 'index'])->name('reachUs');
Route::post('reach-us-submit', [FrontendContactUsController::class, 'reachUs'])->name('contact.reach');
Route::post('reachUsappoint', [FrontendContactUsController::class, 'reachUsappoint'])->name('reachUsappoint');
Route::post('reach-us-store', [FrontendContactUsController::class, 'reachUsStore'])->name('contact.reachUsStore');
Route::post('reach-us-store1', [FrontendContactUsController::class, 'reachUsStore_old'])->name('contact.reachUsStore_old');
Route::any('reach-otp-submit', [FrontendContactUsController::class, 'submitOtp'])->name('contact.submitOtp');
Route::any('book-otp-submit', [FrontendContactUsController::class, 'submitOtp2'])->name('contact.submitOtp2');
Route::post('book-an-appointment', [FrontendHomeController::class, 'bookAnAppointment'])->name('bookAnAppointment');
Route::get('partnership', [FrontendPartnerShipController::class, 'index'])->name('partnership');
Route::post('franchise-financials', [FrontendPartnerShipController::class, 'franchiseFinancials'])->name('franchiseFinancials');
Route::any('frontend/Franchisee-Brochure', [FrontendPartnerShipController::class, 'brochure'])->name('brochure');
Route::get('blueskynailacademy.hyderabad', [FrontendNailExtensionController::class, 'index'])->name('nailacademy');
Route::get('blueskynailacademy.hyderabad/terms', [FrontendNailExtensionController::class, 'Termspolices'])->name('nailacademy/terms');
Route::get('blueskynailacademy.hyderabad/registercourse', [FrontendNailExtensionController::class, 'registercourse'])->name('registercourse');


Route::post('nail-contact-us', [FrontendNailExtensionController::class, 'nailcontactus'])->name('nailcontactus');
Route::post('nailCourse-contact-us', [FrontendNailExtensionController::class, 'nailCoursecontactus'])->name('nailCoursecontactus');
Route::get('blueskynailacademy.hyderabad/thankunailcontactus', [FrontendNailExtensionController::class, 'thanku'])->name('thankunailcontactus');
Route::get('blueskynailacademy.hyderabad/coursesdetail', [FrontendNailExtensionController::class, 'coursesdetail'])->name('coursesdetail');
Route::get('blueskynailacademy.hyderabad/MarbleArt', [FrontendNailExtensionController::class, 'MarbleArt'])->name('MarbleArt');
Route::get('blueskynailacademy.hyderabad/NailStart', [FrontendNailExtensionController::class, 'NailStart'])->name('NailStart');
Route::get('blueskynailacademy.hyderabad/GumGelExtensions', [FrontendNailExtensionController::class, 'GumGelExtensions'])->name('GumGelExtensions');
Route::get('blueskynailacademy.hyderabad/NailExtensions', [FrontendNailExtensionController::class, 'NailExtensions'])->name('NailExtensions');
Route::get('blueskynailacademy.hyderabad/NailExtensionsPlus', [FrontendNailExtensionController::class, 'NailExtensionsPlus'])->name('NailExtensionsPlus');
Route::get('blueskynailacademy.hyderabad/RussianManicure', [FrontendNailExtensionController::class, 'RussianManicure'])->name('RussianManicure');
Route::get('blueskynailacademy.hyderabad/SoftGelExtensionsCertification', [FrontendNailExtensionController::class, 'SoftGelExtensionsCertification'])->name('SoftGelExtensionsCertification');
Route::get('blueskynailacademy.hyderabad/OmbreGlazeNail', [FrontendNailExtensionController::class, 'OmbreGlazeNail'])->name('OmbreGlazeNail');
Route::get('blueskynailacademy.hyderabad/GelNailArt', [FrontendNailExtensionController::class, 'GelNailArt'])->name('GelNailArt');
Route::get('blueskynailacademy.hyderabad/StampingNailArt', [FrontendNailExtensionController::class, 'StampingNailArt'])->name('StampingNailArt');
Route::get('blueskynailacademy.hyderabad/DGelCertification', [FrontendNailExtensionController::class, 'DGelCertification'])->name('DGelCertification');
Route::get('blueskynailacademy.hyderabad/WorkwithEfilter', [FrontendNailExtensionController::class, 'WorkwithEfilter'])->name('WorkwithEfilter');
Route::get('blueskynailacademy.hyderabad/frenchgelpolish', [FrontendNailExtensionController::class, 'frenchgelpolish'])->name('frenchgelpolish');
Route::get('blueskynailacademy.hyderabad/CatEyeCatNailArt', [FrontendNailExtensionController::class, 'CatEyeCatNailArt'])->name('CatEyeCatNailArt');
Route::get('blueskynailacademy.hyderabad/ChromeNailArt', [FrontendNailExtensionController::class, 'ChromeNailArt'])->name('ChromeNailArt');

Route::get('/men-hair-wigs-chennaitest/', [FrontendHomeController::class, 'menswigstest'])->name('menswigstest');

Route::get('/men-hair-wigs-chennai/', [FrontendHomeController::class, 'menswigs'])->name('menswigs');
Route::get('/ladies-wigs-chennai/', [FrontendHomeController::class, 'womenwigs'])->name('womenwigs');
Route::get('/hair-toppers-for-women-chennai/', [FrontendHomeController::class, 'topperlandingCh'])->name('topperlandingCh');
Route::get('/hair-extension-chennai/', [FrontendHomeController::class, 'extensionlandingCh'])->name('extensionlandingCh');
Route::get('/hair-patch-for-men-chennai/', [FrontendHomeController::class, 'patchlandingCh'])->name('patchlandingCh');


Route::get('/men-hair-wigs-hyderabad/', [FrontendHomeController::class, 'menswigshyd'])->name('menswigshyd');
Route::get('/ladies-wigs-hyderabad/', [FrontendHomeController::class, 'womenwigshyd'])->name('womenwigshyd');
Route::get('/hair-toppers-for-women-hyderabad/', [FrontendHomeController::class, 'topperlandingHYD'])->name('topperlandingHYD');
Route::get('/hair-extension-hyderabad/', [FrontendHomeController::class, 'extensionlandingChhyd'])->name('extensionlandingChhyd');
Route::get('/hair-patch-for-men-hyderabad/', [FrontendHomeController::class, 'patchlandinghyd'])->name('patchlandinghyd');

Route::any('nail-otp-submit', [FrontendNailExtensionController::class, 'submitOtp'])->name('nail.submitOtp');
Route::any('nailCourse-otp-submit', [FrontendNailExtensionController::class, 'submitOtpRegister'])->name('nail.submitOtpRegister');

Route::post('pop-up-Coupon', [FrontendNailExtensionController::class, 'POPUPFORM'])->name('nail.popupform');

Route::get('product/{slug}', [FrontendProductController::class, 'index'])->name('product');

Route::get("/403-forbidden", function () {
    return View::make("admin.403");
})->name('403');



// Blog Routes

Route::get('/blog', [BlogController::class, 'index'])->name('home.blog');
