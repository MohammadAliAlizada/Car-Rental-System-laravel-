<?php

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

Route::get('/adminlogin', function () {
    return view('adminLogin');
});

Auth::routes();
// Registration Routes...

	// $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
	// $this->post('register', 'Auth\RegisterController@register');



///////////////////////////
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', [
	'uses' => 'WebsiteController@home',
	'as'   =>  'home' 	
	]);
	Route::get('/companies', [
		'uses' => 'WebsiteController@index',
		'as'   => 'company'
	]);
	Route::get('/company-Detail/{id}', [
		'uses' => 'WebsiteController@cpmDetail',
		'as'   => 'companyDetail'
	]);
	Route::get('/companylogin', [
		'uses' => 'WebsiteController@companyLogin',
		'as'   => 'cpmlogin'
	]);
	
	Route::get('/Riderlogin', [
	'uses' => 'WebsiteController@riderLogin',
		'as'   => 'riderlogin'
	]);
	Route::get('/companyRegister', [
		'uses' => 'WebsiteController@companyRegister',
		'as'   => 'cpmregister'
	]);
	Route::get('/riderRegister/{id}', [
		'uses' => 'WebsiteController@riderRegister',
		'as'   => 'riderregister'
	]);
	
	Route::get('/driverRegister/{id}', [
		'uses' => 'WebsiteController@driverRegister',
		'as'   => 'driverRegister'
	]);
	
	Route::get('/emergenfcy-Contact', [
		'uses' => 'WebsiteController@emergencyContact',
		'as'   => 'emergencyContact'
	]);
	
	////////////////////////////////////////////////////////////////////////////
	///////////////////////// CMS Routes///////////////////////////////////////

	

	///////////////////////Admin
	
	Route::post('/save_data', [
		'uses' => 'AdminController@save',
		'as'   => 'savecompany'
	]);
	Route::get('/addCPMDetail', [
		'uses' => 'AdminController@addDetail',
		'as'   => 'addcmpdetail'
	]);

	Route::get('/companyLists', [
		'uses' => 'AdminController@allCompany',
		'as'   => 'companyLists'
	]);
	Route::get('/Company-detail-lists/{id}', [
		'uses' => 'AdminController@cpmDetailList',
		'as'   => 'cpmDetailList'
	]);

	///////////////////////Company
	
	Route::get('/companyProfile', [
		'uses' => 'companyController@profile',
		'as'   => 'companyProfile'
	]);
	Route::get('/CompanyLists', [
		'uses' => 'AdminController@allCompany',
		'as'   => 'companylists'
	]);
	Route::get('/company-delete/{id}', [
		'uses' => 'AdminController@deleteCompany',
		'as'   =>'companyDelete'
	]);
	Route::get('/company-update/{id}', [
		'uses' => 'AdminController@updateCompany',
		'as'   =>'companyUpdate'
	]);
	
	Route::get('/Booked/{id}', [
		'uses' => 'companyController@Booked',
		'as'   =>'Reserved'
	]);
	


	/////////////////////////Rider
	Route::get('/riderLists', [
		'uses' => 'companyController@allRiders',
		'as'   => 'riderLists'
	]);
	Route::get('/Booking', [
		'uses' => 'RiderController@book',
		'as'   => 'bookride'
	]);
	Route::get('/MyRide', [
		'uses' => 'RiderController@myride',
		'as'   => 'myride'
	]);

	Route::get('/Riders/{id}', [
		'uses' => 'companyController@allRiders',
		'as'   => 'Riders'
	]);
	Route::get('/riderProfile', [
		'uses' => 'RiderController@find',
		'as'   => 'riderProfile'
	]);
	Route::get('/rider-delete/{id}', [
		'uses' => 'companyController@deleteRider',
		'as'   =>'riderDelete'
	]);
	Route::get('/rider-update/{id}', [
		'uses' => 'companyController@updateRider',
		'as'   =>'riderUpdate'
	]);
	Route::post('/Book', [
		'uses' => 'RiderController@book',
		'as'   =>'book'
	]);
	


	//////////////////////////Driver
	Route::get('/Drivers/{id}', [
		'uses' => 'companyController@allDrivers',
		'as'   => 'Drivers'
	]);
	
	
	Route::get('/driver-delete/{id}', [
		'uses' => 'companyController@deleteDriver',
		'as'   =>'driverDelete'
	]);
	Route::get('/driver-update/{id}', [
		'uses' => 'companyController@updateDriver',
		'as'   =>'driverUpdate'
	]);
	
	Route::get('/rider-requests/{id}', [
		'uses' => 'RiderController@riderrequest',
		'as'   =>'request'
	]);

	Route::get('/accept/{id}', [
		'uses' => 'RiderController@accept',
		'as'   =>'accept'
	]);
	Route::get('/rideLists', [
		'uses' => 'RiderController@ridelist',
		'as'   =>'ridelist'
	]);
	
	
	Route::get('/driver-profile', [
		'uses' => 'RiderController@driverprofile',
		'as'   =>'driverProfile'
	]);
	
	