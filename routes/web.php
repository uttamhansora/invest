<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// User Routes Start
Route::get('user-login',[UserController::class,'login'])->name('user-login');
Route::post('user-login-post',[UserController::class,'login_post'])->name('user-login-post');

Route::get('user-register',[UserController::class,'register'])->name('user-register');
Route::get('getstate',[UserController::class,'getstate'])->name('getstate');
Route::get('getcity',[UserController::class,'getcity'])->name('getcity');
Route::post('user-register-post',[UserController::class,'register_post'])->name('user-register-post');

Route::middleware(['auth', 'checkUserRole'])->group(function () {
    Route::post('/verification/submit', [VerificationController::class, 'submit'])->name('verification.submit');

Route::get('user-dashboard',[UserController::class,'dashboard'])->name('user-dashboard');

Route::get('user-deposit',[UserController::class,'deposit'])->name('user.deposit');
Route::get('user-subscription',[UserController::class,'subscription'])->name('user.subscription');
Route::get('user-withdraw',[UserController::class,'withdraw'])->name('user.withdraw');
Route::get('user-wallet-history',[UserController::class,'wallethistory'])->name('user.wallet-history');

Route::get('/user.logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/user-profile', [UserController::class, 'userprofile'])->name('user-profile');
Route::post('/update-user-profile', [UserController::class, 'updateuserprofile'])->name('update-user-profile');
Route::post('/selectplan', [UserController::class, 'selectplan'])->name('selectplan');
Route::post('/depositamount', [UserController::class, 'depositamount'])->name('deposit-amount');
Route::post('/submitwithdraw', [UserController::class, 'submitwithdraw'])->name('submit-withdraw');

});








// Admin Route Start
Route::get('admin-login',[AdminLoginController::class,'login'])->name('admin-login');
Route::post('admin-login-post',[AdminLoginController::class,'login_post'])->name('admin-login-post');

Route::get('admin-register',[AdminLoginController::class,'register'])->name('admin-register');
Route::post('admin-register-post',[AdminLoginController::class,'register_post'])->name('admin-register-post');

Route::middleware(['auth', 'checkAdminRole'])->group(function () {

Route::get('dashboard',[AdminLoginController::class,'dashboard'])->name('dashboard');
Route::get('verifydoc',[AdminLoginController::class,'verifydoc'])->name('verifydoc');
Route::post('submitverify',[AdminLoginController::class,'submitverify'])->name('submitverify');
Route::get('users',[AdminLoginController::class,'users'])->name('users');
Route::get('qr-code',[AdminLoginController::class,'qrcode'])->name('qr-code');
Route::get('add-qr-code',[AdminLoginController::class,'addqrcode'])->name('add-qr-code');
Route::post('submit-qr-code',[AdminLoginController::class,'submitqrcode'])->name('submit-qr-code');
Route::post('assignqr',[AdminLoginController::class,'assignqr'])->name('assignqr');
Route::post('updatestatus',[AdminLoginController::class,'updatestatus'])->name('updatestatus');

Route::get('subscription',[AdminLoginController::class,'subscription'])->name('subscription');
Route::get('addsubscription',[AdminLoginController::class,'addsubscription'])->name('addsubscription');
Route::post('submitsubscription',[AdminLoginController::class,'submitsubscription'])->name('submitsubscription');
Route::post('approvedreject',[AdminLoginController::class,'approvedreject'])->name('approvedreject');
Route::post('approvedrejectwith',[AdminLoginController::class,'approvedrejectwith'])->name('approvedrejectwith');
Route::post('finqrcode',[AdminLoginController::class,'finqrcode'])->name('finqrcode');
Route::post('finqrcodenotify',[AdminLoginController::class,'finqrcodenotify'])->name('finqrcodenotify');
Route::post('withdrawupdate',[AdminLoginController::class,'withdrawupdate'])->name('withdrawupdate');
Route::post('withdrawupdatenotification',[AdminLoginController::class,'withdrawupdatenotification'])->name('withdrawupdatenotification');

Route::get('deposit',[AdminLoginController::class,'deposit'])->name('deposit');
Route::get('statusupdate',[AdminLoginController::class,'statusupdate'])->name('statusupdate');
Route::get('withdraw',[AdminLoginController::class,'withdraw'])->name('withdraw');
Route::get('notification',[AdminLoginController::class,'notification'])->name('notification');

Route::resource('countries', CountryController::class);
Route::resource('states', StateController::class);
Route::resource('cities', CityController::class);
Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
});


