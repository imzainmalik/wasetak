<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\User\UserPageController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\Auth\adminLoginController;
use App\Http\Controllers\Admin\AdminFlaggedPostController;
use App\Http\Controllers\Admin\AdminSubCategoryController;
use App\Http\Controllers\Admin\AdminForumCategoryController;
use App\Http\Controllers\Admin\AdminSubSubCategoryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Admin\AdminFaqsController;
use App\Http\Controllers\PushNotificationController;
use App\Http\Controllers\UserNotifiedAllowController;

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

// Route::get('/', function () {
//     return redirect()->route('user.index');
// });

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

            Route::get('/post/likes/', [AdminPostController::class, 'view_post_likes'])->name('admin.post.view_post_likes');
            Route::get('/post/comments/', [AdminPostController::class, 'view_post_comments'])->name('admin.post.comments');
            Route::get('/post/likes/', [AdminPostController::class, 'view_post_likes'])->name('admin.post.view_post_likes');

            Route::get('/post/auctions/', [AdminPostController::class, 'all_auctions'])->name('admin.post.auctions');

            Route::get('/post/comments/delete/{comment_id}', [AdminPostController::class, 'delete_comments'])->name('admin.post.comments.delete');
            
            Route::get('/users/index', [AdminUserController::class, 'index'])->name('admin.users.index');
            Route::get('/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
            Route::get('/users/change_status/{user_id}', [AdminUserController::class, 'change_status'])->name('admin.users.change_status');
            
            //Admin Pages
            Route::get('/pages', [AdminPageController::class, 'index'])->name('admin.pages.index');
            Route::get('/pages/create', [AdminPageController::class, 'create'])->name('admin.pages.create');
            Route::post('/pages/stores', [AdminPageController::class, 'store'])->name('admin.pages.store');
            Route::get('/pages/edit/{id}', [AdminPageController::class, 'edit'])->name('admin.pages.edit');
            //Admin Pages Like List
            Route::get('/pages/likes/', [AdminPageController::class, 'view_page_likes'])->name('admin.pages.view_page_likes');
            Route::get('/pages/likes/delete/{id}', [AdminPageController::class, 'page_like_delete'])->name('admin.pages.page_like_delete');
            // Admin Pages Comment
            Route::get('/pages/comments/{page_id?}', [AdminPageController::class, 'view_page_comments'])->name('admin.page.page_comments');
            Route::get('/page/comments/delete/{comment_id}', [AdminPageController::class, 'delete_comments_page'])->name('admin.page.comments.delete');
            
            // Admin Pages Flaged
            Route::get('/pages/flags', [AdminPageController::class, 'flaged_pages'])->name('admin.page.flag_pages');
            Route::get('/page/change_status/{id}', [AdminPageController::class, 'flaged_change_status'])->name('admin.page.flaged_change_status');

            //Admin Pages
          // 'Faqs Routes Start'
          Route::get('/faqs', [AdminFaqsController::class, 'index'])->name('admin.faqs.index');
          Route::get('//faqs/create', [AdminFaqsController::class, 'create'])->name('admin.faqs.create');
          Route::post('/faqs/store', [AdminFaqsController::class, 'store'])->name('admin.faqs.store');
          Route::get('/faqs/edit/{id}', [AdminFaqsController::class, 'edit'])->name('admin.faqs.edit');
          // 'Faqs Routes end'
          
          // push Notification
          Route::get('/notifications', [PushNotificationController::class, 'index'])->name('admin.notifications');
          Route::get('/notifications/create', [PushNotificationController::class, 'notifications_create'])->name('admin.notifications.create');
          Route::post('/send-notification', [PushNotificationController::class, 'sendNotification'])->name('send.notification');
          // push Notification 
        Route::post('/users/store', [AdminUserController::class, 'store'])->name('admin.users.store');
        Route::get('/users/edit/{email}', [AdminUserController::class, 'edit'])->name('admin.users.edit');
        Route::post('/users/update/{email}', [AdminUserController::class, 'update'])->name('admin.users.update'); 
        Route::get('/post/flagged/index', [AdminFlaggedPostController::class, 'index'])->name('admin.flagged.post.index'); 
        // 'Category Routes Start'
        Route::get('/categories', [AdminForumCategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/category/create', [AdminForumCategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/category/store', [AdminForumCategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/category/edit/{id}', [AdminForumCategoryController::class, 'edit'])->name('admin.category.edit');
        // 'Category Routes end'

        // 'Sub Category Routes Start'
        Route::get('/sub-categories', [AdminSubCategoryController::class, 'index'])->name('admin.subcategory.index');
        Route::get('/sub-category/create', [AdminSubCategoryController::class, 'create'])->name('admin.subcategory.create');
        Route::post('/sub-category/store', [AdminSubCategoryController::class, 'store'])->name('admin.subcategory.store');
        Route::get('/sub-category/edit/{id}', [AdminSubCategoryController::class, 'edit'])->name('admin.subcategory.edit');
        // 'Sub Category Routes end'

        // 'Sub Sub Category Routes Start'
        Route::get('/sub-sub-categories', [AdminSubSubCategoryController::class, 'index'])->name('admin.subsubcategory.index');
        Route::get('/sub-sub-category/create', [AdminSubSubCategoryController::class, 'create'])->name('admin.subsubcategory.create');
        Route::post('/sub-sub-category/store', [AdminSubSubCategoryController::class, 'store'])->name('admin.subsubcategory.store');
        Route::get('/sub-sub-category/edit/{id}', [AdminSubSubCategoryController::class, 'edit'])->name('admin.subsubcategory.edit');
        // 'Sub Sub Category Routes end' 
        // 'Setting Routes Start'
        Route::get('/settings', [AdminSettingController::class, 'index'])->name('admin.setting.index');
        Route::post('/settings/store', [AdminSettingController::class, 'store'])->name('admin.setting.store');
        // 'Setting Routes end'
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
    Route::get('/get_all_notifications',[PushNotificationController::class,'get_all_notifications'])->name('user.get_all_notifications');
    Route::get('/get_replies_notifications',[PushNotificationController::class,'get_replies_notifications'])->name('user.get_replies_notifications');

    Route::get('/dissmiss_all_notifications',[PushNotificationController::class,'dissmiss_all_notifications'])->name('user.dissmiss_all_notifications');
    Route::get('/notification_redirect/{notification_id}',[PushNotificationController::class,'notification_redirect'])->name('user.notification_redirect');

    Route::get('/',[UserController::class,'index'])->name('user.index');
    Route::post('/register',[UserController::class,'register'])->name('user.register');
    Route::post('/save-token', [PushNotificationController::class, 'saveToken'])->name('save-token');
    Route::post('/check-mail',[UserController::class,'checkMail'])->name('user.check-email');
    Route::post('/check-username',[UserController::class,'checkUsername'])->name('user.check-username');
    Route::post('/username-exist',[UserController::class,'checkUserExist'])->name('user.username-exist');
    Route::post('/login',[UserController::class,'login'])->name('user.login');
    Route::get('/register-verification/{token}',[UserController::class,'registerVerification'])->name('user.register_verification');
    Route::post('/resend-verification-mail',[UserController::class,'resendVerificationMail'])->name('user.resendVerificationMail');
    Route::get('/change-register-email/{token}',[UserController::class,'changeVerificationEmail'])->name('user.changeRegisterEmail');
    Route::post('/change-register-email',[UserController::class,'changeRegisterEMail'])->name('user.changeRegisterEMail');
    //topic
    Route::post('/user-like-post/{post_id}',[PostController::class,'user_like_post'])->name('user.user_like_post');
    Route::post('/user-like-post-comment/{reply_id}',[PostController::class,'user_like_post_comment'])->name('user.user_like_post_comment');
    Route::post('/user-bookmark-post/{post_id}',[PostController::class,'user_bookmark_post'])->name('user.user_bookmark_post');
    Route::post('/user-flag-post',[PostController::class,'user_flag_post'])->name('user.user_flag_post');
    Route::post('/create_comment/{post_id}',[PostController::class,'create_comment'])->name('user.create_comment');
    Route::post('/create_post', [PostController::class, 'create_post'])->name('user.create_post');    Route::post('/create_comment/{post_id}',[PostController::class,'create_comment'])->name('user.create_comment');
    Route::get('/user-bookmark-page/delete/{bookmark_id}', [UserPageController::class, 'delete_bookmark'])->name('user.delete_bookmark_page');
    Route::get('/about', [UserPageController::class, 'about'])->name('user.about');
    //pages
    Route::post('/user-like-page/{page_id}',[UserPageController::class,'user_like_page'])->name('user.user_like_page');
    Route::post('/user-flag-page',[UserPageController::class,'user_flag_page'])->name('user.user_flag_page');
    Route::post('/user-bookmark-page',[UserPageController::class,'user_bookmark_page'])->name('user.user_bookmark_page');
    Route::post('/create_comment_page/{page_id}',[UserPageController::class,'create_comment_page'])->name('user.create_comment_page');
    Route::post('/user-notification-allow', [UserNotifiedAllowController::class, 'user_notification_allow'])->name('user.user_notification_allow');
    //User Profile Bookmark
    Route::get('/delete_bookmark/{bookmark_id}',[PostController::class,'delete_bookmark'])->name('user.delete_bookmark');
    Route::get('/pin_bookmark/{bookmark_id}',[PostController::class,'pin_bookmark'])->name('user.pin_bookmark');
    Route::get('/unpin_bookmark/{bookmark_id}',[PostController::class,'unpin_bookmark'])->name('user.unpin_bookmark');
    //User Profile Bookmark 
    Route::get('/post_detail/{id}',[PostController::class,'post_detail'])->name('user.post_detail'); 
    Route::post('/place_bid/{id}',[PostController::class,'place_bid'])->name('user.place_bid');
    Route::post('/profile_update', [UserController::class,'profile_update'])->name('user.profile_update');
    Route::post('/turnon2fa', [UserController::class,'turnon2fa'])->name('user.turnon2fa');
    Route::get('/verify2fa/{token}',[UserController::class,'verify2fa'])->name('user.verify2fa');
    Route::post('/verify_login_code_check', [UserController::class,'verify_login_code_check'])->name('user.verify_login_code_check');
    Route::get('/verify2fa/{token}',[UserController::class,'verify2fa'])->name('user.verify2fa');
    Route::get('/verify-login-code',[UserController::class,'verify_login_code'])->name('verify-login-code');
    Route::get('/create_pdf',[UserController::class,'profile'])->name('user.create_pdf');
    Route::get('/page/{slug}', [UserPageController::class, 'userPage'])->name('user.userPage');
    Route::get('/win-prizes',[UserPageController::class,'win_prizes'])->name('user.win_prizes');
    Route::get('/how-it-work', function () { return view('User.how_it_work');})->name('user.how_it_work');
    Route::get('/quick-rule', function () { return view('User.quick_rule');})->name('user.quick_rule');
    Route::get('/what-wasetak', function () { return view('User.what_wasetak');})->name('user.what_wasetak');
    Route::get('/rewards-rules', function () { return view('User.rewards_rules');})->name('user.rewards_rules');
    Route::get('/rewards', function () { return view('User.rewards');})->name('user.rewards');
    Route::get('/how-it-use', function () { return view('User.how_it_use');})->name('user.how_it_use');
    Route::get('/ways-to-earn', function () { return view('User.ways_to_earn');})->name('user.ways_to_earn');
    Route::get('/top-earners', function () { return view('User.top_earners');})->name('user.top_earners');
    Route::get('/frequently-asked-question', function () { return view('User.frequently_asked_question');})->name('user.frequently_asked_question');
    Route::get('/start-checkout', function () { return view('User.start_checkout');})->name('user.start_checkout');
    Route::get('/fee-calculator', function () { return view('User.fee_calculator');})->name('user.fee_calculator');
    Route::get('/begin-a-transaction', function () { return view('User.begin_a_transaction');})->name('user.begin_a_transaction');
    Route::get('/stay-connected', function () { return view('User.stay_connected');})->name('user.stay_connected');
    Route::get('/search-listing', [SearchController::class, 'index'])->name('user.search_listing');
    Route::get('/docs', function () { return view('User.doc');})->name('user.doc');
    Route::get('/create-topics', function () { return view('User.create_topic');})->name('user.create_topic');
    Route::get('/subscribe',[UserController::class,'subscribe'])->name('user.subscribe');
    Route::get('/users', [UserPageController::class, 'UserList'])->name('user.userList'); 
});

// Route::group(['middleware' => 'user.loginCheck'],function(){
    Route::get('/profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('/user-details/{user_name}',[UserController::class,'user_profile'])->name('user.user_profile');
    Route::get('/follow/{user_id}',[UserController::class,'follow'])->name('user.follow');
    Route::get('/unfollow/{user_id}',[UserController::class,'unfollow'])->name('user.unfollow');
    Route::get('/user-logout', [UserController::class, 'userLogout'])->name('user.logout');

    Route::post('/create_feedback/{id}',[UserController::class,'create_feedback'])->name('user.create_feedback');
     Route::get('/search_user',[UserController::class,'search_user'])->name('user.search_user');

// });

// checkout route
// Route::group(['prefix' => 'checkout'], function () {
    Route::get('/checkout',[checkoutController::class,'index'])->name('checkout.index');
    Route::post('/begin-transaction',[checkoutController::class,'beginTransaction'])->name('checkout.beginTransaction');
    Route::post('/send-invites',[checkoutController::class,'sendInvites'])->name('checkout.sendInvites');
    Route::post('/find-username-list',[checkoutController::class,'findUsernameList'])->name('checkout.findUsernameList');
    Route::post('/create-ticket',[checkoutController::class,'createTicket'])->name('checkout.create_ticket');
    Route::get('/ticket-details/{ticket_id}',[checkoutController::class,'ticketDetails'])->name('checkout.ticket_details');
// });
