<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group( function () {

        Route::get('/index','DashboardController@index')->name('index')->middleware('auth');

        // users route
        Route::resource('/users','UserController')->except(['show']);

        // site_settings routes
        Route::get('/sitesettings',
            [
            'uses'=> 'SitesettingController@index',
            'as'=> 'sitesettings'
        ]);

        Route::post('/sitesettings/update',[

            'uses'=> 'SitesettingController@update',
            'as'=> 'sitesettings.update'
        ]);

        //contactus routes
        Route::resource('/contactus','ContactusController');

        // About us settings routes
        Route::get('/aboutussettings',
            [
                'uses'=> 'AboutussettingController@index',
                'as'=> 'aboutussettings'
            ]);

        Route::post('/aboutussettings/update',[

            'uses'=> 'AboutussettingController@update',
            'as'=> 'aboutussettings.update'
        ]);

        // categories route
        Route::resource('/categories','CategoryController')->except(['show']);

        // single project route
        Route::resource('/singleproject','ProjectController')->except(['show']);

        Route::post('constructionsettings/update/','ConstructionsettingController@update')
            ->name('constructionsettings.update');



        // construction settings routes
        Route::get('/constructionsettings',
            [
                'uses'=> 'ConstructionsettingController@index',
                'as'=> 'constructionsettings'
            ]);

        Route::post('/constructionsettings/update',[

            'uses'=> 'ConstructionsettingController@update',
            'as'=> 'constructionsettings.update'
        ]);



        // construction settings routes
        Route::get('/servicesettings',
            [
                'uses'=> 'ServicesettingController@index',
                'as'=> 'servicesettings'
            ]);

        Route::post('/servicesettings/update',[

            'uses'=> 'ServicesettingController@update',
            'as'=> 'servicesettings.update'
        ]);

        //follow routes
        Route::resource('/followers','FollowerController')->except(['show']);


        //brands routes
        Route::resource('/brands','BrandController')->except(['show']);

        //opinionsettings routes
        Route::get('/opinionsettings',
            [
                'uses'=>'OpinionsettingController@index',
                'as'=>'opinionsettings'
            ]);

        Route::post('/opinionsettings.update',[
            'uses'=>'OpinionsettingController@update',
            'as'=>'opinionsettings.update'
        ]);

    });//end of prefix dashboard
});//end of routes
