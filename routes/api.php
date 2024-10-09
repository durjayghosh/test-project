<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [App\Http\Controllers\API\AuthController::class,'register'])->name('register');;
Route::post('/login', [App\Http\Controllers\API\AuthController::class,'login'])->name('login'); 
Route::post('/ForgetPassword', [App\Http\Controllers\API\AuthController::class,'ForgetPassword'])->name('ForgetPassword'); 
Route::post('/ResetPassword', [App\Http\Controllers\API\AuthController::class,'ResetPassword'])->name('ResetPassword'); 
Route::post('/getuserprofile', [App\Http\Controllers\API\AuthController::class,'getuserprofile'])->name('getuserprofile');
Route::post('/changepassword', [App\Http\Controllers\API\AuthController::class,'changepassword'])->name('changepassword');
Route::post('/updateprofile', [App\Http\Controllers\API\AuthController::class,'updateprofile'])->name('updateprofile');
Route::post('/updateprofileimage', [App\Http\Controllers\API\AuthController::class,'updateprofileimage'])->name('updateprofileimage');
Route::post('/getuserorderhistory', [App\Http\Controllers\API\OrdersController::class,'getuserorderhistory'])->name('getuserorderhistory');



Route::post('/send-notification', [App\Http\Controllers\API\OrdersController::class,'store'])->name('api.send-notification'); 
 Route::group(['middleware' => 'auth:api'], function(){
   //User 
   Route::post('/user/status', [App\Http\Controllers\API\AuthController::class,'myStatus'])->name('api.user.status');   
     
     
   //Route::post('/order', [App\Http\Controllers\API\OrdersController::class,'store'])->name('api.order'); 
   Route::post('/order/getdeliveryboyorder', [App\Http\Controllers\API\OrdersController::class,'getdeliveryboyorder'])->name('api.order.getdeliveryboyorder');
   Route::post('/order/acceptorder', [App\Http\Controllers\API\OrdersController::class,'acceptorder'])->name('api.order.acceptorder');   
   Route::post('/order/change-status', [App\Http\Controllers\API\OrdersController::class,'changeStatus'])->name('api.order.changeStatus');   
   
 }); 


 //Route::apiResource('/order', App\Http\Controllers\API\OrdersController::class)->middleware('auth:api');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
