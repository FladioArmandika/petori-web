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

Route::get('/', 'MainController@getHomePage');

Route::get('/tes', 'MainController@getServiceDetail');

Route::group(['prefix'=>'service','as'=>'service.'], function() {
    Route::get('/d/{serviceId}', 'Service\ServiceController@getServiceDetail');

    Route::get('/order', 'Service\ServiceController@getOrderDetail')->name('order');

    Route::get('/order/confirm', 'Service\ServiceController@getConfirmationPage')->name('order-confirm');

    Route::get('/order/fitems/{category}', 'Service\ServiceController@getItemComponent')->name('item-component');

    // Success
    Route::get('/order/success', 'Service\ServiceController@getOrderSuccessPage')->name('order.success');

    Route::post('/order', 'Service\ServiceController@postSelectedItem');
});

Route::group(['prefix'=>'auth','as'=>'auth.'], function() {

    Route::get('/login', 'UserAuth\LoginController@getLoginPage')->name('login');
    Route::get('/register', 'UserAuth\LoginController@getRegisterPage')->name('register');

});

Route::group(['prefix'=>'profile','as'=>'profile.'], function() {
    Route::get('/', 'User\ProfileController@getProfilePage');
});

Route::group(['prefix'=>'order','as'=>'order.'], function() {
    Route::get('/', 'User\OrderController@getOrderPage');

    Route::get('/s/{status}', 'User\OrderController@fetchOrder');
});
