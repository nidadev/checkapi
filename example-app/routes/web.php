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

Route::group(['middleware' => ['guest']],function(){
    Route::get('/home', [ApiController::class, 'loadHome'])->name('home')->middleware(IsCorsMiddleware::class);
    Route::get('/login2', [ApiController::class, 'loadLogin']);
    Route::post('/login2', [ApiController::class,'userLogin'])->name('userLogin');
    Route::get('/register', [ApiController::class,'loadRegister'])->name('loadRegister');
    Route::post('/register', [ApiController::class,'register'])->name('register');

});

Route::group(['middleware' => ['userAuth']],function(){

Route::get('/dashboard',[ApiController::class,'dashboard'])->name('dashboard');
});

Route::group(['middleware' => ['IsAuth']],function(){

    Route::get('/subscription',[SubscriptionController::class,'loadSubscription'])->name('subscription');
    Route::post('/get-plan-details',[SubscriptionController::class,'getPlanDetails'])->name('getPlanDetails');

    Route::get('/compreport', [ApiController::class,'loadCompReport'])->name('compreport');
    Route::post('/logout', [ApiController::class,'Logout'])->name('logout');

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
Route::get('/getproperty', [ApiController::class,'loadProperty'])->name('getproperty');
Route::post('/getproperty', [ApiController::class,'insert_prop_detail'])->name('getproperty');

Route::get('/getproperty2', [ApiController::class,'loadProperty2'])->name('getproperty2');
Route::post('/getproperty2', [ApiController::class,'insert_prop_detail2'])->name('getproperty2');
    
    Route::post('/create-subscription', [SubscriptionController::class,'CreateSubscription'])->name('CreateSubscription');
    Route::post('/cancel-subscription', [SubscriptionController::class,'CancelSubscription'])->name('CancelSubscription');

//checkout stripe
    Route::post('stripe',[SubscriptionController::class,'stripe'])->name('stripe');
    Route::get('success',[SubscriptionController::class,'success'])->name('success');
    Route::get('cancel',[SubscriptionController::class,'cancel'])->name('cancel');


    Route::get('/pdf/{id}', [ApiController::class, 'pdf_download2']);
Route::get('/export/{id}', [ApiController::class, 'export_comp']);
Route::get('/export_price/{pricehouseid}', [ApiController::class, 'export_house_comp'])->name('export_house');

//Route::post('/webhook-subscription',SubscriptionController::class,'webhookSubscription')->name('webhookSubscription');


Route::get('/download/xml/{id}', [ApiController::class, 'xmldownload'])->name('download.xml');

Route::get('/profile-update', [ApiController::class, 'profile']);
Route::post('/profile-update', [ApiController::class,'updateProfile'])->name('profile-update');
Route::get('send-verify-mail/{email}',[ApiController::class,"verifyEmail"]);

});


Route::get('/support', function () {
    return view('support');
});

Route::get('/verify-mail/{token}', [ApiController::class, 'verifyEmailToken']);

