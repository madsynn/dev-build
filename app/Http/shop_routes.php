<?php
/**
 * Created by PhpStorm.
 * User: Phillip Madsen
 * Date: 8/2/2016
 * Time: 1:43 PM
 */
Route::group(['prefix' => LaravelLocalization::getCurrentLocale(), 'before' => ['localization', 'before']], function ()
{

    Route::group([
        'prefix' => '/admin',
        'middleware' => ['before', 'sentinel.auth', 'sentinel.permission']
    ], function () {
        Route::get('ecom', [ 'as' => 'ecom', 'uses' =>'EcomController@index']);


        Route::get('products', [ 'as' => 'admin.products', 'uses' =>'EcomController@products']);
        Route::get('product/create', [ 'as' => 'admin.product.create', 'uses' =>'EcomController@createProduct']);
        Route::get('product/{id}/edit', [ 'as' => 'admin.product.edit', 'uses' =>'EcomController@editProduct']);

        Route::post('product/create', [ 'as' => 'product.store', 'uses' =>'ProductController@store']);
        Route::get('product/{id}/delete', [ 'as' => 'product.delete', 'uses' =>'ProductController@delete']);
        Route::post('product/{id}/edit', ['as' => 'product.edit', 'uses' =>'ProductController@edit']);

        Route::get('users', [ 'as' => '', 'uses' =>'EcomController@users']);
        Route::get('categories', [ 'as' => '', 'uses' =>'EcomController@categories']);
        Route::get('sections', [ 'as' => '', 'uses' =>'EcomController@sections']);
        Route::get('payment', [ 'as' => '', 'uses' =>'EcomController@payment']);
        Route::post('payment', [ 'as' => '', 'uses' =>'EcomController@paymentConfig']);
        Route::get('orders', [ 'as' => '', 'uses' =>'EcomController@orders']);
        Route::get('messages', [ 'as' => '', 'uses' =>'EcomController@messages']);
        Route::get('pages', [ 'as' => '', 'uses' =>'EcomController@pages']);
        Route::get('coupons', [ 'as' => '', 'uses' =>'EcomController@coupons']);


        Route::get('category/create', [ 'as' => '', 'uses' =>'EcomController@createCategory']);
        Route::get('category/{id}/edit', [ 'as' => '', 'uses' =>'EcomController@editCategory']);
        Route::get('user/create', [ 'as' => '', 'uses' =>'EcomController@createUser']);
        Route::get('user/{id}/edit', [ 'as' => '', 'uses' =>'EcomController@editUser']);
        Route::get('section/create', [ 'as' => '', 'uses' =>'EcomController@createSection']);
        Route::get('section/{id}/edit', [ 'as' => '', 'uses' =>'EcomController@editSection']);
        Route::get('message/{id}', [ 'as' => '', 'uses' =>'EcomController@showMessage']);
        Route::get('order/{id}', [ 'as' => '', 'uses' =>'EcomController@showOrder']);
        Route::get('page/create', [ 'as' => '', 'uses' =>'EcomController@createPage']);
        Route::get('page/{page_name}/edit', [ 'as' => '', 'uses' =>'EcomController@editPage']);
        Route::get('coupon/create', [ 'as' => '', 'uses' =>'EcomController@createCoupon']);
        Route::get('coupon/{id}/edit', [ 'as' => '', 'uses' =>'EcomController@editCoupon']);
    });
});



Route::group(['prefix' => LaravelLocalization::getCurrentLocale(), 'before' => ['localization', 'before']], function ()
{

    /**
     * Products Routes
     */
    // Route::get('/', 'ProductController@index');


    Route::get('/product/{id}-{slug}/show', [ 'as' => '', 'uses' =>'ProductController@show']);
    Route::get('/product/{id}/photo/{photo_id}/delete',[ 'as' => '', 'uses' => 'ProductController@deletePhoto']);
    Route::get('/option/{id}/delete', [ 'as' => '', 'uses' => 'ProductController@deleteOption']);
    Route::get('/optionvalue/{id}/delete', [ 'as' => '', 'uses' => 'ProductController@deleteOptionValue']);
    Route::get('/search', [ 'as' => '', 'uses' => 'ProductController@search']);




});