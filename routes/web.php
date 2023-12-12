<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\adminLoginController;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminUserController;

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
    return redirect()->route('user.index');
});

Route::group(['prefix' => 'admin'], function () {
        Route::group(['middleware' => 'admin.redirect'], function () {
        Route::get('/login',[adminLoginController::class,'loginForm'])->name('loginForm');
        Route::post('/login',[adminLoginController::class,'login'])->name('login');
        Route::post('/forgot-password',[adminLoginController::class,'forgotPassword'])->name('forgotPassword');
        Route::get('/reset-password/{token}', [adminLoginController::class, 'resetPassword'])->name('resetPassword');
        Route::post('/reset-password', [adminLoginController::class, 'resetPasswordSave'])->name('resetPasswordSave');
    });
    Route::get('/admin-logout', [adminLoginController::class, 'adminLogout'])->name('adminLogout');
    
    Route::group(['middleware' => 'auth:admin'],function(){
        Route::get('/dashboard', [adminController::class, 'dashboard'])->name('dashboard');
        Route::get('/post/index', [AdminPostController::class, 'index'])->name('admin.post.index');
        Route::get('/post/change_status/{id}', [AdminPostController::class, 'change_status'])->name('admin.post.change_status');
        Route::get('/post/view/{id}', [AdminPostController::class, 'view_post'])->name('admin.post.view_post');

        Route::get('/users/index', [AdminUserController::class, 'index'])->name('admin.users.index');
        Route::get('/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
    });
});

Route::get('get-login-link/{username}', [UserController::class, 'getLoginLink'])->name('getLoginLink');
Route::get('login-with-username/{username}', [UserController::class, 'loginWithUsername'])->name('loginWithUsername');
// Route::get('forget-password', [UserController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [UserController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [UserController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('submit-reset-password', [UserController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('verify/{token}', [UserController::class, 'verify'])->name('verification.verify');
Route::post('/activate-account',[UserController::class,'activateAccount'])->name('user.activateAccount');


Route::group(['middleware' => 'user.redirect'], function () {
    Route::get('/index',[UserController::class,'index'])->name('user.index');
    Route::post('/register',[UserController::class,'register'])->name('user.register');
    Route::post('/check-mail',[UserController::class,'checkMail'])->name('user.check-email');
    Route::post('/check-username',[UserController::class,'checkUsername'])->name('user.check-username');
    Route::post('/username-exist',[UserController::class,'checkUserExist'])->name('user.username-exist');
    Route::post('/login',[UserController::class,'login'])->name('user.login');
    Route::get('/register-verification/{token}',[UserController::class,'registerVerification'])->name('user.register_verification');
    Route::post('/resend-verification-mail',[UserController::class,'resendVerificationMail'])->name('user.resendVerificationMail');
    Route::get('/change-register-email/{token}',[UserController::class,'changeVerificationEmail'])->name('user.changeRegisterEmail');
    Route::post('/change-register-email',[UserController::class,'changeRegisterEMail'])->name('user.changeRegisterEMail');
});

Route::group(['middleware' => 'user.loginCheck'],function(){
    Route::get('/profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('/user-logout', [UserController::class, 'userLogout'])->name('user.logout');

    // checkout route
    Route::group(['prefix' => 'checkout'], function () {
        Route::post('/create-ticket',[checkoutController::class,'createTicket'])->name('checkout.create_ticket');
        Route::get('/ticket-details/{ticket_id}',[checkoutController::class,'ticketDetails'])->name('checkout.ticket_details');
    });
});

// checkout route
Route::group(['prefix' => 'checkout'], function () {
    Route::get('/',[checkoutController::class,'index'])->name('checkout.index');
    Route::post('/begin-transaction',[checkoutController::class,'beginTransaction'])->name('checkout.beginTransaction');
    Route::post('/send-invites',[checkoutController::class,'sendInvites'])->name('checkout.sendInvites');
    Route::post('/find-username-list',[checkoutController::class,'findUsernameList'])->name('checkout.findUsernameList');
});
