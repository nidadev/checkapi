<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\IsCorsMiddleware;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\SubscriptionController;

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/subscription', function () {
    return view('subscription');
});

Route::get('/faq', function () {
    return view('faq');
});
Route::get('/how-it-works-lands', function () {
    return view('how-it-works-lands');
});
Route::get('/how-it-works-houses', function () {
    return view('how-it-works-houses');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/subscription-home', function () {
    return view('subscription-home');
});

Route::group(['middleware' => ['guest']],function(){
    Route::get('/home', [ApiController::class, 'loadHome'])->name('home')->middleware(IsCorsMiddleware::class);
    Route::get('/login', [ApiController::class, 'loadLogin']);
    Route::post('/login', [ApiController::class,'userLogin'])->name('userLogin');
    Route::get('/register', [ApiController::class,'loadRegister'])->name('loadRegister');
    Route::post('/register', [ApiController::class,'register'])->name('register');

});

Route::group(['middleware' => ['userAuth']],function(){
    Route::get('/dashboard',[ApiController::class,'dashboard'])->name('dashboard');
    Route::get('/compreport', [ApiController::class,'loadCompReport'])->name('compreport');
    


    Route::post('/compreport', [ApiController::class,'GetCompReport'])->name('compreport');

    Route::get('/priceland', [ApiController::class,'loadPriceReport'])->name('priceland');
    //Route::post('/priceland', [ApiController::class,'GetPriceReport'])->name('priceland');
    Route::post('/priceland', [ApiController::class, 'GetPriceReport']);
    Route::get('/get-report-results', [ApiController::class, 'getReportResults'])->name('get.report.results');


    Route::get('/pricehouse', [ApiController::class,'loadPriceHouseReport'])->name('pricehouse');
    
    Route::post('/pricehouse', [ApiController::class,'GetPriceHouseReport']);
    Route::get('/get-house-results', [ApiController::class, 'getReportHouseResults'])->name('get.house.results');

    Route::get('/research', [ApiController::class,'loadPriceResearchReport'])->name('research');
    Route::post('/research', [ApiController::class,'GetPriceResearchReport'])->name('research');
     

//
  
 
//checkout stripe
    Route::post('stripe',[SubscriptionController::class,'stripe'])->name('stripe');
    Route::get('success',[SubscriptionController::class,'success'])->name('success');
    Route::get('cancel',[SubscriptionController::class,'cancel'])->name('cancel');


    Route::get('/pdf/{id}', [ApiController::class, 'pdf_download2']);
Route::get('/export/{id}', [ApiController::class, 'export_comp']);
Route::get('/export_price/{pricehouseid}', [ApiController::class, 'export_house_comp'])->name('export_house');

//Route::post('/webhook-subscription',SubscriptionController::class,'webhookSubscription')->name('webhookSubscription');

/************************************new export */

Route::post('/export-price-house', [ApiController::class, 'exportPriceHouse'])->name('exportprice');

// Route to download the exported file
Route::get('/download-export/{fileName}', [ApiController::class, 'downloadExport'])->name('download.export');
/********************************* */
Route::get('/getallfiles', [ApiController::class, 'deletefromStorage']);


Route::get('/download/xml/{id}', [ApiController::class, 'xmldownload'])->name('download.xml');

Route::get('/profile-update', [ApiController::class, 'profile']);
Route::post('/profile-update', [ApiController::class,'updateProfile'])->name('profile-update');
Route::get('send-verify-mail/{email}',[ApiController::class,"verifyEmail"]);



});

Route::group(['middleware' => ['IsAuth']],function(){

    Route::get('/subscription',[SubscriptionController::class,'loadSubscription'])->name('subscription');

    Route::post('/get-plan-details',[SubscriptionController::class,'getPlanDetails'])->name('getPlanDetails');

    Route::post('/logout', [ApiController::class,'Logout'])->name('logout');
    Route::post('/create-subscription', [SubscriptionController::class,'CreateSubscription'])->name('CreateSubscription');
    Route::post('/cancel-subscription', [SubscriptionController::class,'CancelSubscription'])->name('CancelSubscription');
    
    Route::get('/getproperty', [ApiController::class,'loadProperty'])->name('getproperty');
    Route::post('/getproperty', [ApiController::class,'insert_prop_detail'])->name('getproperty');
    
    Route::get('/getproperty2', [ApiController::class,'loadProperty2'])->name('getproperty2');
    Route::post('/getproperty2', [ApiController::class,'insert_prop_detail2'])->name('getproperty2');
      

});


Route::get('/support', function () {
    return view('support');
});

Route::post('/support', [ApiController::class,'contactForm'])->name('contactForm');

Route::get('/forget', [ApiController::class,'forgetPasswordLoad'])->name('forget');
Route::post('/forget', [ApiController::class,'forgetPassword'])->name('forgetPassword');

Route::get('/reset', [ApiController::class,'resetPasswordLoad'])->name('reset');
Route::post('/reset', [ApiController::class,'resetPassword'])->name('resetPassword');


Route::get('/terms', function () {
    return view('terms');
});
Route::get('/home', [ApiController::class, 'loadHome'])->name('home');


Route::get('/verify-mail/{token}', [ApiController::class, 'verifyEmailToken']);
Route::get('/adminpage', [ApiController::class, 'AdminPage'])->middleware('IsAdmin');


