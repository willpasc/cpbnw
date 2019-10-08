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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/clear', function() {

    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('view:clear');

    return "Cleared!";

});

// FRONTEND ROUTE

Route::get('/', 'Frontend\HomeController@index')->name('home');
Route::get('/district', 'Frontend\HomeController@district')->name('frontend.district');
Route::get('/about', 'Frontend\HomeController@about')->name('frontend.about');
Route::get('/masterplan', 'Frontend\HomeController@masterplan')->name('frontend.masterplan');
Route::get('/introduction', 'Frontend\HomeController@introduction')->name('frontend.introduction');
Route::get('/location', 'Frontend\HomeController@location')->name('frontend.location');
Route::get('/developer', 'Frontend\HomeController@developer')->name('frontend.developer');
Route::get('/master-plan', 'Frontend\HomeController@planMaster')->name('frontend.plan.master');
Route::get('/partners', 'Frontend\HomeController@partners')->name('frontend.partners');
Route::get('/floor-plan', 'Frontend\HomeController@planFloor')->name('frontend.plan.floor');
Route::get('/unit-plan', 'Frontend\HomeController@planUnit')->name('frontend.plan.unit');
Route::get('/features', 'Frontend\HomeController@features')->name('frontend.features');
Route::get('/contact-us', 'Frontend\HomeController@contactUs')->name('frontend.contact_us');
Route::post('/contact-us', 'Frontend\HomeController@saveContactUs')->name('frontend.contact_us.save');
Route::post('/subscribe-submit', 'Admin\SubscribeController@store')->name('frontend.subscribe.save');
Route::get('/catalogue/download', 'Frontend\HomeController@downloadCatalogue')->name('frontend.catalogue.download');

// BNW
Route::get('/portfolio', 'Frontend\HomeController@portfolio')->name('frontend.portfolio');
Route::get('/contact', 'Frontend\HomeController@contact')->name('frontend.contact');
Route::get('/services', 'Frontend\HomeController@services')->name('frontend.services');
Route::get('/portfolio/detail/{id}', 'Frontend\PortfolioController@show')->name('frontend.portfolio.show');

// ADMIN ROUTE
// ====================================================================================================================

Route::prefix('admin')->group(function(){
    Route::get('/', 'Admin\PortofolioController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Portofolio
    Route::get('/portofolio/', 'Admin\PortofolioController@index')->name('admin.portofolio.index');
    Route::get('/portofolio/show/{item}', 'Admin\PortofolioController@show')->name('admin.portofolio.show');
    Route::get('/portofolio/create', 'Admin\PortofolioController@create')->name('admin.portofolio.create');
    Route::post('/portofolio/store', 'Admin\PortofolioController@store')->name('admin.portofolio.store');
    Route::get('/portofolio/edit/{item}', 'Admin\PortofolioController@edit')->name('admin.portofolio.edit');
    Route::post('/portofolio/update', 'Admin\PortofolioController@update')->name('admin.portofolio.update');
    Route::post('/portofolio/delete', 'Admin\PortofolioController@destroy')->name('admin.portofolio.destroy');

    // Contact Message
    Route::get('/contact-messages', 'Admin\ContactMessageController@index')->name('admin.contact-messages.index');

    // Admin User
    Route::get('/admin-users', 'Admin\AdminUserController@index')->name('admin.admin-users.index');
    Route::get('/admin-users/create', 'Admin\AdminUserController@create')->name('admin.admin-users.create');
    Route::post('/admin-users/store', 'Admin\AdminUserController@store')->name('admin.admin-users.store');
    Route::get('/admin-users/edit/{item}', 'Admin\AdminUserController@edit')->name('admin.admin-users.edit');
    Route::post('/admin-users/update', 'Admin\AdminUserController@update')->name('admin.admin-users.update');
    Route::post('/admin-users/delete', 'Admin\AdminUserController@destroy')->name('admin.admin-users.destroy');

    // User
    Route::get('/users', 'Admin\UserController@index')->name('admin.users.index');
    Route::get('/users/create', 'Admin\UserController@create')->name('admin.users.create');
    Route::post('/users/store', 'Admin\UserController@store')->name('admin.users.store');
    Route::get('/users/edit/{item}', 'Admin\UserController@edit')->name('admin.users.edit');
    Route::post('/users/update', 'Admin\UserController@update')->name('admin.users.update');
    Route::post('/users/delete', 'Admin\UserController@destroy')->name('admin.users.destroy');

    // Subscribes
    Route::get('/subscribes', 'Admin\SubscribeController@index')->name('admin.subscribes.index');
    Route::get('/subscribe-downloads', 'Admin\SubscribeController@download')->name('admin.subscribes.download');

    Route::get('/admin/change-password', 'Admin\AdminController@editPassword')->name('admin.change-password');
    Route::post('/admin/change-password/save', 'Admin\AdminController@updatePassword')->name('admin.change-password.save');
});

Route::get('/datatable/portofolio', 'Admin\PortofolioController@getIndex')->name('datatables.portofolio');
