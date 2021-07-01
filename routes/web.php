<?php

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Auth::routes(['register' => false]);


    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/contactus', function () {
        return view('website.contactus.contactus');
    });// contact us route page

    Route::get('/aboutus', function () {
        return view('website.aboutus.aboutus');
    }); //about us route page

    Route::get('/projects', 'Dashboard\ProjectController@front'); // single project route page
    Route::get('projects/show_product/{id}', 'Dashboard\ProjectController@show_product')->name('product.show'); // single project route page

    Route::get('/service', 'Dashboard\ServicesettingController@frontpro'); // service route page
    Route::get('service/show_product/{id}', 'Dashboard\ServicesettingController@show_productpro')->name('product.show');// service route page

    Route::get('/','FrontController@front' );// الصفحه الامامية
    Route::get('/show_product/{id}', 'FrontController@show_product')->name('product.show');// الصفحه الامامية

    Route::get('/singleproject', 'SingleprojectController@frontsingle'); // تفاصيل المشروع
    Route::get('/singleproject/show_product/{id}', 'SingleprojectController@show_productsingle')->name('show_productsingle.show');// تفاصيل المشروع
    Route::get('singleproject/show_singleproject/{id}', 'SingleprojectController@show_singleproject')->name('singleproject');// تفاصيل المشروع
    Route::get('/singleproject', 'WelcomeController@searchprojects'); // بحث المشروع

    Route::get('/constructions', 'Dashboard\ConstructionsettingController@frontcon'); //constuctions page
    Route::get('/constructions/show_product/{id}', 'Dashboard\ConstructionsettingController@show_productcon')->name('product.show');//constuctions page


});
