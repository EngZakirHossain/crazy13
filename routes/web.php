<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\Frontend\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['register' => false, 'login' => false,]);
// Auth::routes(['verify' => true]);

//*** frontend route start ***//
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'],function(){
    Route::get('/','HomeController@index')->name('home');
    Route::group(['namespace' => 'Auth', 'as' => 'account.'],function(){
        Route::get('/account','AccountController@index')->name('login_register');
    });



});

//*** frontend route end ***//

//*** admin route start ***//

//*** admin custom  auth route group start ***//
Route::group(['namespace' => 'Admin\Auth', 'prefix' => 'admin', 'as' => 'admin.'], function(){

    //verify controller
    Route::get('/profile/verify/{token}','VerifyController@verifyEmail')->name('profile.verify_email');

    Route::get('/login/','LoginController@index')->name('login');
    Route::post('/login/post/','LoginController@authenticate')->name('login.authenticate');
    Route::get('/forget-password/','ForgetPasswordController@index')->name('forget-password');
    Route::post('/forget-password/post/','ForgetPasswordController@submitForgetPasswordForm')->name('forget-password.submit-form');
    Route::get('/reset-password/{token}','ResetPasswordController@index')->name('reset-password');
    Route::post('/reset-password/post/','ResetPasswordController@submitResetPassowrdForm')->name('reset-password.submit-form');
});
//*** admin custom  auth route group end ***//

//*** admin others route start ***//
    Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth','check.role','verified']],function(){


        //account in active home page
        Route::get('/dashboard/inactive','AccountStatusController@index')->name('account-status');

        Route::group(['middleware' => 'check.account.status'],function(){

            //dashboard home page
            Route::get('/dashboard','HomeController@index')->name('home');

            //this route group available only for super admin
            //new user add,store update in admin section
            Route::group(['middleware' => 'check.superAdmin', 'prefix' => 'user'],function(){
                Route::get('/','UserController@index')->name('user');
                Route::post('/store','UserController@store')->name('user.store');
                Route::post('/update/{id}','UserController@update')->name('user.update');
                Route::get('/active/{id}','UserController@active')->name('user.active');
                Route::get('/deactive/{id}','UserController@deactive')->name('user.deactive');
                Route::get('/destroy/{id}','UserController@destroy')->name('user.destroy');

            });

            //new Members add,store update in admin section
            Route::group(['prefix' => 'member'],function(){
                Route::get('/','MemberController@index')->name('member');
                Route::post('/store','MemberController@store')->name('member.store');
//                Route::post('/update/{id}','UserController@update')->name('user.update');
                Route::get('/destroy/{id}','MemberController@destroy')->name('member.destroy');

            });

            //this is profile controller
            Route::group(['prefix' => 'profile'],function(){
                Route::get('/','ProfileController@index')->name('profile');
                Route::get('/edit','ProfileController@profile_edit')->name('profile.edit');
                Route::get('/change-password','ProfileController@change_password')->name('profile.change_password');
                Route::post('/update/{id}','ProfileController@update')->name('profile.update');
                Route::post('/change_password/{id}','ProfileController@update_password')->name('profile.update_password');


            });


        });

    });
//*** admin others route end ***//
// Route::get('/home', 'HomeController@index')->name('home');





//*** admin route end ***//

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
