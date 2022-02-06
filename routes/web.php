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



Route::get('/', 'HomeFrontController@index');

Route::get('/rajnitii', 'RajnitiController@index');
Route::get('/rajniti/news/{id}', 'RajnitiController@pageNews');

Route::get('/bangladeshi', 'BangladeshiController@index');
Route::get('/bangladeshi/news/{id}', 'BangladeshiController@pageNews');

Route::get('/worldi', 'WorldController@index');
Route::get('/worldi/news/{id}', 'WorldController@pageNews');

Route::get('/businesse', 'BusinesseController@index');
Route::get('/businesse/news/{id}', 'BusinesseController@pageNews');

Route::get('/opinioni', 'OpinionController@index');
Route::get('/opinion/news/{id}', 'OpinionController@pageNews');

Route::get('/sportsi', 'SportsController@index');
Route::get('/sports/news/{id}', 'SportsController@pageNews');

Route::get('/entertainmenti', 'EntertainmentController@index');
Route::get('/entertainment/news/{id}', 'EntertainmentController@pageNews');

Route::get('/jobi', 'JobController@index');
Route::get('/job/news/{id}', 'JobController@pageNews');


Auth::routes(['verify' => true]);


Route::prefix('/')->group(function () {
    // Dashboard route

    Route::get('/admin/home', 'AdminController@index');//->name('admin.dashboard');

    Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin', 'Admin\LoginController@login');
            // Password Reset Routes...
    Route::get('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::get('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::get('admin-password/reset', 'Admin\ResetPasswordController@reset');
    Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
    Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
    Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');

    // Profile
    Route::get('/profile','AdminController@profile')->name('admin-profile');
    Route::post('/profileupdate/{id}','AdminController@profileUpdate')->name('admin.profile.update');

    //banners=====
    Route::get('admin/banners', 'Admin\BannerController@Create')->name('banners');
    Route::post('admin/store/banner', 'Admin\BannerController@storebanner')->name('store.banner'); 
    Route::get('delete/banner/{id}','Admin\BannerController@DeleteBanner');
    Route::get('edit/banner/{id}','Admin\BannerController@EditBanner'); 
    Route::post('update/banner/{id}','Admin\BannerController@UpdateBanner');
    Route::get('inactive/banner/{id}','Admin\BannerController@Inactive'); 
    Route::get('active/banner/{id}','Admin\BannerController@Active');
    
    //blog routes
    //blog categories--------
    Route::get('admin/post_category', 'Admin\PostController@blog_catgory')->name('post_category');    
    Route::post('admin/store/post_category', 'Admin\PostController@blog_storecatgory')->name('store.post_category');
    Route::get('delete/post_category/{id}','Admin\PostController@DeleteCategory');
    Route::get('edit/post_category/{id}','Admin\PostController@EditCategory');
    Route::post('update/post_category/{id}','Admin\PostController@UpdateCategory');
    //bangladesh blog main part
    Route::get('admin/add/post', 'Admin\Post\BangladeshController@create')->name('add.blogpost');
    Route::post('admin/store/post', 'Admin\Post\BangladeshController@store')->name('store.post');
    Route::get('admin/all/post', 'Admin\Post\BangladeshController@index')->name('all.blogpost');
    Route::get('delete/post/{id}','Admin\Post\BangladeshController@destroy');
    Route::get('edit/post/{id}','Admin\Post\BangladeshController@edit');
    Route::post('update/post/{id}','Admin\Post\BangladeshController@update');
    Route::get('inactive/post/{id}','Admin\Post\BangladeshController@Inactive'); 
    Route::get('active/post/{id}','Admin\Post\BangladeshController@Active');

    //rajniti blog main part
    Route::get('admin/add/rajnitipost', 'Admin\Post\PostRajnitiController@create')->name('add.rajniti');
    Route::post('admin/store/rajpost', 'Admin\Post\PostRajnitiController@store')->name('store.rajpost');
    Route::get('admin/all/rajnitipost', 'Admin\Post\PostRajnitiController@index')->name('all.rajniti');
    Route::get('delete/rajpost/{id}','Admin\Post\PostRajnitiController@destroy');
    Route::get('edit/rajnitipost/{id}','Admin\Post\PostRajnitiController@edit');
    Route::post('update/rajpost/{id}','Admin\Post\PostRajnitiController@update');
    Route::get('inactive/rajpost/{id}','Admin\Post\PostRajnitiController@Inactive'); 
    Route::get('active/rajpost/{id}','Admin\Post\PostRajnitiController@Active');

    //World blog main part
    Route::get('admin/add/worldpost', 'Admin\Post\PostWorldController@create')->name('add.world');
    Route::post('admin/store/worpost', 'Admin\Post\PostWorldController@store')->name('store.worpost');
    Route::get('admin/all/worldpost', 'Admin\Post\PostWorldController@index')->name('all.world');
    Route::get('delete/worpost/{id}','Admin\Post\PostWorldController@destroy');
    Route::get('edit/worldpost/{id}','Admin\Post\PostWorldController@edit');
    Route::post('update/worpost/{id}','Admin\Post\PostWorldController@update');
    Route::get('inactive/worpost/{id}','Admin\Post\PostWorldController@Inactive'); 
    Route::get('active/worpost/{id}','Admin\Post\PostWorldController@Active');

    //business blog main part
    Route::get('admin/add/businesspost', 'Admin\Post\PostBusinessController@create')->name('add.business');
    Route::post('admin/store/busipost', 'Admin\Post\PostBusinessController@store')->name('store.busipost');
    Route::get('admin/all/businesspost', 'Admin\Post\PostBusinessController@index')->name('all.business');
    Route::get('delete/busipost/{id}','Admin\Post\PostBusinessController@destroy');
    Route::get('edit/businesspost/{id}','Admin\Post\PostBusinessController@edit');
    Route::post('update/busipost/{id}','Admin\Post\PostBusinessController@update');
    Route::get('inactive/busipost/{id}','Admin\Post\PostBusinessController@Inactive'); 
    Route::get('active/busipost/{id}','Admin\Post\PostBusinessController@Active');

    //sport blog main part
    Route::get('admin/add/sportpost', 'Admin\Post\PostSportController@create')->name('add.sport');
    Route::post('admin/store/sportpost', 'Admin\Post\PostSportController@store')->name('store.sportpost');
    Route::get('admin/all/sportpost', 'Admin\Post\PostSportController@index')->name('all.sport');
    Route::get('delete/sportpost/{id}','Admin\Post\PostSportController@destroy');
    Route::get('edit/sportpost/{id}','Admin\Post\PostSportController@edit');
    Route::post('update/sportpost/{id}','Admin\Post\PostSportController@update');
    Route::get('inactive/sportpost/{id}','Admin\Post\PostSportController@Inactive'); 
    Route::get('active/sportpost/{id}','Admin\Post\PostSportController@Active');

    //opinion blog main part
    Route::get('admin/add/opinionpost', 'Admin\Post\PostOpinionController@create')->name('add.opinion');
    Route::post('admin/store/opipost', 'Admin\Post\PostOpinionController@store')->name('store.opipost');
    Route::get('admin/all/opinionpost', 'Admin\Post\PostOpinionController@index')->name('all.opinion');
    Route::get('delete/opipost/{id}','Admin\Post\PostOpinionController@destroy');
    Route::get('edit/opinionpost/{id}','Admin\Post\PostOpinionController@edit');
    Route::post('update/opipost/{id}','Admin\Post\PostOpinionController@update');
    Route::get('inactive/opipost/{id}','Admin\Post\PostOpinionController@Inactive'); 
    Route::get('active/opipost/{id}','Admin\Post\PostOpinionController@Active');

    //entertainment blog main part
    Route::get('admin/add/entertainmentpost', 'Admin\Post\PostEntertainmentController@create')->name('add.entertainment');
    Route::post('admin/store/enterpost', 'Admin\Post\PostEntertainmentController@store')->name('store.enterpost');
    Route::get('admin/all/entertainmentpost', 'Admin\Post\PostEntertainmentController@index')->name('all.entertainment');
    Route::get('delete/enterpost/{id}','Admin\Post\PostEntertainmentController@destroy');
    Route::get('edit/entertainmentpost/{id}','Admin\Post\PostEntertainmentController@edit');
    Route::post('update/enterpost/{id}','Admin\Post\PostEntertainmentController@update');
    Route::get('inactive/enterpost/{id}','Admin\Post\PostEntertainmentController@Inactive'); 
    Route::get('active/enterpost/{id}','Admin\Post\PostEntertainmentController@Active');

    //job blog main part
    Route::get('admin/add/jobpost', 'Admin\Post\PostJobController@create')->name('add.job');
    Route::post('admin/store/jobpost', 'Admin\Post\PostJobController@store')->name('store.jobpost');
    Route::get('admin/all/jobpost', 'Admin\Post\PostJobController@index')->name('all.job');
    Route::get('delete/jobpost/{id}','Admin\Post\PostJobController@destroy');
    Route::get('edit/jobpost/{id}','Admin\Post\PostJobController@edit');
    Route::post('update/jobpost/{id}','Admin\Post\PostJobController@update');
    Route::get('inactive/jobpost/{id}','Admin\Post\PostJobController@Inactive'); 
    Route::get('active/jobpost/{id}','Admin\Post\PostJobController@Active');

    //job technology main part
    Route::get('admin/add/tecnopost', 'Admin\Post\PostTecnoController@create')->name('add.tecno');
    Route::post('admin/store/tecnopost', 'Admin\Post\PostTecnoController@store')->name('store.tecnopost');
    Route::get('admin/all/tecnopost', 'Admin\Post\PostTecnoController@index')->name('all.tecno');
    Route::get('delete/tecnopost/{id}','Admin\Post\PostTecnoController@destroy');
    Route::get('edit/tecnopost/{id}','Admin\Post\PostTecnoController@edit');
    Route::post('update/tecnopost/{id}','Admin\Post\PostTecnoController@update');
    Route::get('inactive/tecnopost/{id}','Admin\Post\PostTecnoController@Inactive'); 
    Route::get('active/tecnopost/{id}','Admin\Post\PostTecnoController@Active');
    
    //photography blog main part
    Route::get('admin/add/phopost', 'Admin\Post\PostPhotographyController@create')->name('add.pho');
    Route::post('admin/store/phopost', 'Admin\Post\PostPhotographyController@store')->name('store.phopost');
    Route::get('admin/all/phopost', 'Admin\Post\PostPhotographyController@index')->name('all.pho');
    Route::get('delete/phopost/{id}','Admin\Post\PostPhotographyController@destroy');
    Route::get('edit/phopost/{id}','Admin\Post\PostPhotographyController@edit');
    Route::post('update/phopost/{id}','Admin\Post\PostPhotographyController@update');
    Route::get('inactive/phopost/{id}','Admin\Post\PostPhotographyController@Inactive'); 
    Route::get('active/phopost/{id}','Admin\Post\PostPhotographyController@Active');
    
    //site setting
    Route::get('admin/sitesetting', 'Admin\SitesettingsController@Sitesetting')->name('admin.sitesettings');
    Route::post('update/sitesetting/{id}','Admin\SitesettingsController@Updatesitesetting');
    
});
