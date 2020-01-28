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




Route::group(['namespace' => 'landlord', 'prefix'=>'landlord'], function() {
    Route::get('/landlord-signup', 'RegisterController@landlord_signup');
    Route::get('/overview', 'DashboardController@dashboard');
    Route::post('/landlordSignup', 'RegisterController@landlordSignup');

    //property
    Route::get('/post-property', 'PropertyController@post_property');
    Route::post('/postPropert', 'PropertyController@postProperty');

    //Profile
    Route::get('/profile', 'ProfileController@profile');
    Route::post('/submitProfile', 'ProfileController@submitProfile');
    Route::post('/addPhoto', 'ProfileController@addPhoto');

    //Bank
    Route::post('/addBank', 'BankController@addBank');
    Route::get('/properties', 'PropertyController@properties');
    Route::get('/add-agreement', 'AgreementController@agreement');

    Route::post('/addAgreement', 'AgreementController@addAgreement');

    Route::get('/view-agreements', 'AgreementController@view_agreement');
    Route::get('/finance', 'FinanceController@finance');
});


Route::group(['namespace' => 'Auth'], function() {
    Route::post('/tenantRegister', 'RegisterController@registerTenant');
    Route::get('/tenant/register', 'RegisterController@tenant_signup');

});

Route::group(['namespace' => 'tenant', 'prefix'=>'tenant'], function() {
    Route::get('/overview', 'DashboardController@dashboard')->name('tenants');
    Route::get('/profile', 'ProfileController@profile');
    Route::post('/addPhoto', 'ProfileController@addPhoto');
    Route::post('/submitProfile', 'ProfileController@submitProfile');
    Route::get('/properties', 'PropertiesController@properties');
    Route::get('/view-property/{id}', 'PropertiesController@viewProperty');
    Route::post('/showInterest', 'PropertiesController@redirectToGateway');
    Route::get('/finance', 'FinanceController@finance');
    Route::get('/view-invoice/{id}', 'InvoiceController@invoice');
    Route::get('/invoice', function () {
    
     return view('tenant.pages.invoice');
 });
    Route::get('/card', function () {
    // return 'hello';
     return view('tenant.pages.card');
 });
    Route::get('/view-agreements', function () {
    // return 'hello';
     return view('tenant.pages.view-agreements');
 });
    Route::get('/agreement', 'AgreementController@agreement');
    Route::post('/submitAgreement', 'AgreementController@submitAgreement');
});


Route::group(['namespace' => 'tenant', 'prefix'=>'tenant'], function() {
   Route::get('/confirmPayment', 'PropertiesController@confirmPayment');
});

Route::group(['namespace' => 'admin', 'prefix'=>'admin'], function() {
    Route::get('/dashboard', 'DashboardController@dashboard');
    Route::get('/properties', 'PropertiesController@properties');
    Route::post('/verifyProperty', 'PropertiesController@verifyProperty');
    
});


//Route::get('/landing', 'DashboardController@dashboard');

Route::get('/', function () {
    return view('landing.pages.index');
});

Route::get('/comingsoon', function () {
    return view('landing.pages.comingsoon');
});


Route::get('/logout', function () {
   auth()->logout();
   return redirect('/login');
});


Route::post('/submitme', function () {
    // return 'hello';
     return request()->all();
     return view('landlord.pages.overview');
 });

// Route::get('/overview', function () {
//     // return 'hello';
//      return view('landing.pages.overview');
//  });

Route::get('/about', function () {
    // return 'hello';
     return view('landing.pages.about');
 });
 
//  Route::get('/login', function () {
//     // return 'hello';
//      return view('landing.pages.tenantlogin');
//  });

 Route::get('/business-odel', function () {
    // return 'hello';
     return view('landing.pages.tenantlogin');
 });

 Route::get('/business-model', function () {
    // return 'hello';
     return view('landing.pages.businessmodel');
 });

 

//  Route::get('/login', function () {
//     // return 'hello';
//      return view('landlords.signup');
//  });


 Route::group(['namespace' => 'Auth', 'prefix'=>'landlord' ], function() {
    Route::get('/landlord-signup', 'RegisterController@landlord_signup');
    Route::post('/landlordSignup', 'RegisterController@landlordSignup');
   // Route::resource('/doctor', 'DoctorController');
});
Auth::routes();

Route::get('/home', function () {

    if(Auth::user()->role_id = 1){

        return redirect('/tenant/overview');
    } elseif(Auth::user()->role_id = 2){
    // return 'hello';
    return redirect('/landlord/overview');
    }
 });
