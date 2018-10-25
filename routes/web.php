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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register-complete', function() {
    return view('email.verification');
});
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::get('/product-detail/{id}', 'ProductController@getDetails');

Route::get('/contact', function() {
    return view('shop.contact');
})->name('contact');

Route::get('/add-to-cart/{id}', 'CartController@getAddToCart');
Route::get('/cart', 'CartController@getCart')->name('cart');
Route::get('/cart/remove/{id}', 'CartController@removeCart');

Route::group(['prefix' => 'product'], function() {
    Route::get('/search', 'ProductController@getSearch')->name('search');
    Route::get('/categories/platform', 'ProductController@getProductPlatform')->name('category-platform');
    Route::get('/categories/codes', 'ProductController@getProductCode')->name('category-code');

    Route::get('/categories/platform/pc', 'ProductController@getProductPc')->name('platform-pc');
    Route::get('/categories/platform/playstation', 'ProductController@getProductPlay')->name('platform-play');
    Route::get('/categories/platform/xbox', 'ProductController@getProductXbox')->name('platform-xbox');
    Route::get('/categories/platform/nintendo', 'ProductController@getProductNintendo')->name('platform-nintendo');

    Route::get('/categories/codes/origin', 'ProductController@getCodePc')->name('codes-origin');
    Route::get('/categories/codes/playstation', 'ProductController@getCodePlay')->name('codes-play');
    Route::get('/categories/codes/xbox', 'ProductController@getCodeXbox')->name('codes-xbox');
    Route::get('/categories/codes/steam', 'ProductController@getCodeSteam')->name('codes-steam');
});

Route::group(['prefix' => 'checkout'], function() {
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/address', 'CheckoutController@getCheckoutAddress')->name('checkout-address');
        Route::get('/shipping', 'CheckoutController@getCheckoutShipping')->name('checkout-shipping');
        Route::get('/pay', 'CheckoutController@getCheckoutPay')->name('checkout-pay');

        Route::post('/address', 'CheckoutController@saveCheckoutAddress')->name('checkout-address');
        Route::post('/shipping', 'CheckoutController@saveCheckoutShipping')->name('checkout-shipping');
    });
});

Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/panel', 'AdminController@getPanel')->name('principal-panel');
        Route::get('/users', 'AdminController@getUsers')->name('users-panel');
        Route::get('/products', 'AdminController@getProducts')->name('products-panel');
        Route::get('/orders', 'AdminController@getOrders')->name('orders-panel');

        Route::get('/add/product','AdminController@getAddProductImage')->name('add-image-product');
        Route::post('/add/product','AdminController@saveAddProductImage')->name('add-image-product');
        Route::post('/add/details/product', 'AdminController@getAddDetails')->name('add-product');

        Route::get('/add/user', 'AdminController@getAddUser')->name('add-user');
        Route::post('/add/user', 'AdminController@SaveAddUser')->name('add-user');

        Route::get('/edit/user/{id}', 'AdminController@getEditUser')->name('edit-user');
        Route::get('/edit/order/{id}', 'AdminController@getEditOrder')->name('edit-order');

        Route::post('/edit/user/{id}', 'AdminController@saveEditUser')->name('edit-user');
        Route::post('/edit/order/{id}', 'AdminController@saveEditOrder')->name('edit-order');

        Route::get('/delete/user/{id}', 'AdminController@deleteUser')->name('delete-user');
        Route::get('/delete/product/{id}', 'AdminController@deleteProduct')->name('delete-product');
        Route::get('/delete/order/{id}', 'AdminController@deleteOrder')->name('delete-order');
    }); 
});
// Route::group(['prefix' => 'user'], function(){
//     Route::get('/cart', 'CartController@getCart')->middleware('auth');
// });
