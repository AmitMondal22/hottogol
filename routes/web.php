<?php

use App\Http\Controllers\admin\Auth_admin;
use App\Http\Controllers\admin\Dashboard as AdminDashboard;
use App\Http\Controllers\public_view\Dashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[Dashboard::class,'dashboard']);



Route::prefix('admin')->group(function(){
    Route::middleware('guest:admin')->group(function(){
        Route::match(['get','post'], '/login',[Auth_admin::class,'login'])->name('admin.login');

        Route::match(['get','post'], '/email-valadition/{id}/{email}',[Auth_admin::class,'otp_valadition'])->name('emailvaladition');

    });



    Route::match(['get', 'post'], '/admin',[AdminDashboard::class,'admin_view'])->name('admin.menubar');



    Route::middleware('auth:admin')->group(function(){
        Route::match(['get','post'], '/register',[Auth_admin::class,'register'])->name('admin.register');

        Route::get('dashboard',[AdminDashboard::class,'dashboard'])->name('admin.dashboard');



        // ===================logout=================================
        Route::get('/logout',function(){
            Auth::guard('admin')->logout();
            // return redirect('/org/login');
            return redirect()->route('admin.login');
        })->name('admin.logout');
        // ===================logout=================================
    });

});
