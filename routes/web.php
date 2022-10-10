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

Route::get('/', 'RootController@index');

Auth::routes();

// frontend
// home
Route::get('/home', 'HomeController@index')->name('home');

// user
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

// product -- use backend controller
Route::get('/products', 'RootController@showSubcategoryShop')->name('subcategory.shop');
Route::get('/products/product/{id}', 'RootController@showProduct');
// add to cart
Route::get('/products/product/add-to-cart/{id}', 'RootController@addToCart')->name('product.addToCart');
Route::patch('/products/product/cart/update-cart', 'RootController@updateCartItem')->name('update.cart');
Route::delete('/products/product/cart/remove-from-cart', 'RootController@removeCartItem')->name('remove.cart');








// backend
// admin
Route::get('/admin', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/admin/dashboard', 'Admin\AdminController@index')->name('admin.dashboard');

// order products
Route::get('/admin/order/pending/product', 'Admin\AdminController@orderPendingProduct')->name('order.pending.product');

// category
Route::get('/admin/category', 'Admin\CategoryController@category')->name('admin.category');
Route::post('/admin/category/store', 'Admin\CategoryController@categoryStore')->name('admin.category.store');
Route::post('/admin/subcategory/store', 'Admin\CategoryController@subcategoryStore')->name('admin.subcategory.store');
Route::get('/admin/subcategory/delete/{id}', 'Admin\CategoryController@categoryDelete');

// products
Route::get('/admin/products', 'Admin\ProductsController@products')->name('admin.products');
Route::get('/admin/product/add', 'Admin\ProductsController@addProduct')->name('admin.product.add');
Route::post('/admin/product/store', 'Admin\ProductsController@storeProduct')->name('admin.product.store');
Route::get('/admin/product/view/{id}', 'Admin\ProductsController@viewProduct');
Route::get('/admin/product/edit/{id}', 'Admin\ProductsController@editProduct');
Route::post('/admin/product/update/{id}', 'Admin\ProductsController@updateProduct');
Route::get('/admin/product/delete/{id}', 'Admin\ProductsController@deleteProduct');


// home page
Route::get('/admin/homepage', 'Admin\HomepageController@homepage')->name('admin.homepage');
// home page slider
Route::post('/admin/homepage/add/slider', 'Admin\HomepageController@addSlider')->name('admin.slider.store');
Route::post('/admin/homepage/update/slider/{id}', 'Admin\HomepageController@updateSlider')->name('admin.slider.update');
Route::get('/admin/homepage/delete/slider/{id}', 'Admin\HomepageController@deleteSlider');
// home page banner
Route::post('/admin/homepage/add/leftBanner/{id}', 'Admin\HomepageController@addLeftBanner')->name('admin.leftBanner.store');
Route::post('/admin/homepage/add/rightBanner/{id}', 'Admin\HomepageController@addRightBanner')->name('admin.rightBanner.store');
Route::post('/admin/homepage/add/poster', 'Admin\HomepageController@addPoster')->name('admin.poster.store');

// who we serve

// resource


// about us


// contact us 


// subscribe email

