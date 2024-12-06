<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin'], function() {
	Route::group(['middleware' => 'admin.guest'], function(){
		Route::view('/login','admin.login')->name('admin.login');
		Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
	});
	
	Route::group(['middleware' => 'admin.auth'], function(){
		Route::get('/adminSignOut',[App\Http\Controllers\AdminController::class, 'adminSignOut'])->name('admin.adminSignOut');
		Route::get('/dashboard',[App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');

		Route::get('/admins',[App\Http\Controllers\AdminController::class, 'Alladmins'])->name('admin.admins');
		Route::get('/create-admin',[App\Http\Controllers\AdminController::class, 'creatAdmin'])->name('admin.create-admin');

		Route::get('/agents',[App\Http\Controllers\AdminController::class, 'Allagents'])->name('admin.agents');
		Route::get('/sub-agents',[App\Http\Controllers\AdminController::class, 'AllSubAgents'])->name('admin.sub-agents');

		Route::get('/create-agents',[App\Http\Controllers\AdminController::class, 'creatAgents'])->name('admin.create-agents');
		Route::get('/create-sub-agents',[App\Http\Controllers\AdminController::class, 'creatSubAgents'])->name('admin.create-sub-agents');

		Route::get('/agencies',[App\Http\Controllers\AdminController::class, 'AllAgencies'])->name('admin.agencies');
		Route::get('/create-agencies',[App\Http\Controllers\AdminController::class, 'createAgencies'])->name('admin.create-agencies');

		Route::get('/role',[App\Http\Controllers\AdminController::class, 'AllRole'])->name('admin.role');
		Route::get('/create-role',[App\Http\Controllers\AdminController::class, 'createRole'])->name('admin.create-role');

		Route::get('/packages',[App\Http\Controllers\AdminController::class, 'AllPackages'])->name('admin.packages');
		Route::get('/create-packages',[App\Http\Controllers\AdminController::class, 'createPackages'])->name('admin.create-packages');

		Route::get('/transportation',[App\Http\Controllers\AdminController::class, 'AllTransportation'])->name('admin.transportation');
		Route::get('/create-transportation',[App\Http\Controllers\AdminController::class, 'createTransportation'])->name('admin.create-transportation');

		Route::get('/pricingslabs',[App\Http\Controllers\AdminController::class, 'AllPricingSlabs'])->name('admin.pricingslabs');
		Route::get('/create-pricing-slabs',[App\Http\Controllers\AdminController::class, 'createPricingSlabs'])->name('admin.create-pricing-slabs');

		Route::get('/bookings',[App\Http\Controllers\AdminController::class, 'AllBookings'])->name('admin.bookings');
		Route::get('/create-bookings',[App\Http\Controllers\AdminController::class, 'createBookings'])->name('admin.create-bookings');
	});
});
