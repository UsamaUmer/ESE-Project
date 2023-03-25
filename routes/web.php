<?php





// USER ROUTES

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace'=>'User'],function(){


    Route::get('/','HomeController@index')->name('/');

    Route::get('singleMobileData/{id}','HomeController@mobileSpec')->name('singleMobileData');

    Route::get('/profile','HomeController@profile')->name('/profile');

    Route::get('/about','HomeController@about')->name('about');


    Route::resource('/checks','checkIMEI');

    Route::get('/allDeviceOfSingleUser/{id}','HomeController@getDeveices')->name('allDeviceOfSingleUser');

    Route::get('/reportedMobiles/{id}','HomeController@reportsMobile')
    ->name('reportedMobiles');

    Route::get('/contact','HomeController@contact')->name('contact');

    Route::get('/service','HomeController@service')->name('service');

    Route::get('/blackListedMobiles','HomeController@blacks')->name('blackListedMobiles');

    Route::get('/stolenMobiles','HomeController@blacks1')->name('stolenMobiles');

});

// Retailer controllers
Route::group(['namespace'=>'Retailer'],function(){

    Route::resource('retailer/rel','UserController');
    
    // Forword Complains
    Route::resource('retailer/ptareportt','Rptareported');

    // Reported Complains
    Route::get('retailer/his','Rptareported@gain')->name('his');

    Route::get('/devicelesss','UserController@devicelesss')->name('devicelesss');

    Route::resource('retailer/regDevice','RegisterDevicesController');

    // history controller
    Route::resource('retailer/hist','HistoryController');

    Route::get('retailer/blacklist1','BlackListDevices@black')->name('blacklist1');

    // Mobile And Owner Information
    Route::get('retailer/blacklisted/{id}','BlackListDevices@user')->name('blacklisted');
     // user And Devices Information
    Route::get('retailer/allDevice/{id}','AllDevices@yes')->name('allDeviced');
    // Single Devices Information
    Route::get('retailer/singleDevice/{id}','AllDevices@yes1')->name('singleDeviced');

    // One Click Reporting 

    Route::resource('retailer/oneClick','OneClick');

});

// RETAILER ROUTE FOR HOME PAGE

Route::get('admins/home1','RetailerHomeController@index')->name('admins.home1');


// ADMIN ROUTE FOR HOME PAGE

Route::get('admin/home','AdminHomeController@index')->name('admin.home')
->middleware('role:Junior Admin|Super Admin');


// ADMIN ROUTES

Route::group(['namespace'=>'Admin'],function(){
   
     // Role Controlers
   
    Route::resource('admin/roles','RoleController')
    ->middleware('role:Junior Admin|Super Admin');
    
     // Assign Role Controlers

    Route::resource('admin/assign','AssignRole')
    ->middleware('role:Junior Admin|Super Admin');


    // Check Role Controlers

    Route::resource('admin/check','CheckRole')
    ->middleware('role:Junior Admin|Super Admin');

        // Remove Role Controlers

    Route::resource('admin/remove','RemoveRole')
    ->middleware('role:Junior Admin|Super Admin');


    
     // Admin Controllers


    Route::resource('admin/admin','AdminsController')
     ->middleware('role:Junior Admin|Super Admin');

    Route::get('/Adminshops/{id}','AdminsController@AllShops')
    ->name('AllShops')
    ->middleware('role:Junior Admin|Super Admin');


    // Retailers Controller 


    Route::resource('admin/retailer','RetailersController')
    ->middleware('role:Junior Admin|Super Admin');

    Route::get('/NonRegisterRetailer','RetailersController@NonRegisterRetailers')->name('NonRegisterRetailers')
    ->middleware('role:Junior Admin|Super Admin');
    
    Route::resource('admin/approver','ApproveRetailerControllers')
    ->middleware('role:Junior Admin|Super Admin');

    // Profile Controllers 

    Route::resource('admin/profiled','ProfileController');

    // Shops Controllers 
    
    Route::resource('admin/shopdel','ShopDel')->middleware('role:Junior Admin|Super Admin');

    
    Route::resource('admin/shop','ShopsController')
    ->middleware('role:Junior Admin|Super Admin');

    Route::get('/NonRegister','ShopsController@NonRegisterShops')->name('NonRegisterShops')
    ->middleware('role:Junior Admin|Super Admin');

    Route::get('/ApproveForm/{id}','ShopsController@ApproveForm')->name('ApproveForm')
    ->middleware('role:Junior Admin|Super Admin');

    Route::get('/AllRetailers/{id}','ShopsController@AllRetailers')->name('AllRetailers')
    ->middleware('role:Junior Admin|Super Admin');

    Route::get('admin/allDevice/{id}','AllDevices@yes')->name('allDevice')
    ->middleware('role:Junior Admin|Super Admin');

    Route::get('admin/singleDevice/{id}','AllDevices@yes1')->name('singleDevice')
     ->middleware('role:Junior Admin|Super Admin');

     // Black List Mobiles
    Route::get('admin/blacklist','BlackListDevices@black')->name('blacklist')
     ->middleware('role:Junior Admin|Super Admin');

     // Mobile And Owner Information
    Route::get('admin/blacklists/{id}','BlackListDevices@user')->name('blacklists')
     ->middleware('role:Junior Admin|Super Admin');
    

    Route::resource('admin/device','DevicesController')
    ->middleware('role:Junior Admin|Super Admin');


    Route::resource('admin/regDevc','RegisterDevicesController')
    ->middleware('role:Junior Admin|Super Admin');


    Route::resource('admin/pta','PtaController')
    ->middleware('role:Junior Admin|Super Admin');


    Route::resource('admin/ptaRep','PtaReportsController')
    ->middleware('role:Junior Admin|Super Admin');
    Route::get('admin/repoertedData','PtaReportsController@gainReported')->name('repoertedData')
    ->middleware('role:Super Admin');


    Route::resource('admin/history','OwnershipHistoryController')
    ->middleware('role:Junior Admin|Super Admin');


    Route::resource('admin/report','OneClickReportController')->middleware('role:Super Admin');


    Route::resource('admin/user','UserController')
    ->middleware('role:Junior Admin|Super Admin');

    Route::get('/deviceless','UserController@deviceless')->name('deviceless')
    ->middleware('role:Junior Admin|Super Admin');

   //  Admin Auth Routes

    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');


    Route::post('admin-login', 'Auth\LoginController@login');

       //  Retailer Auth Routes

    Route::get('retailer-login', 'Retailer\LoginController@showLoginForm')->name('admins.login');


    Route::post('retailer-login', 'Retailer\LoginController@login');
});




Auth::routes();




