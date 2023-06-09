<?php



Route::prefix('admin')->group(function(){
    Auth::routes();

    Route::any('sendToken' , 'BackEnd\ConfigrationController@sendToken')->name('forget.password');
    Route::any('paswordreset/{id}/{token}' , 'BackEnd\ConfigrationController@paswordreset');
    // Route::post('login', 'BackEnd\UserController@login');
    Route::middleware('auth')->namespace('BackEnd')->group(function () {

        Route::get('/', 'ConfigrationController@index');
        Route::resource('configrations', 'ConfigrationController');
        Route::resource('users', 'UserController');      
        Route::resource('news', 'NewsController');
        Route::resource('articles', 'ArticleController');
        Route::resource('services', 'ServiceController');
        Route::resource('galleries', 'GalleryController');   
        Route::resource('questions', 'QuestionController');  
        Route::resource('videos', 'VideoController'); 
    });
});
Route::get('/', 'FrontEnd\HomeController@home')->name('home');
Route::get('article/{articleId}', 'FrontEnd\HomeController@article')->name('article');
Route::get('articles/{type}', 'FrontEnd\HomeController@articles')->name('articles');
Route::get("/policy", function(){
    return View::make("front-end.policy");
 });