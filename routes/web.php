<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

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

Auth::routes(['verify' => true]);
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('tupangeadmin', 'Auth\LoginController@showLoginForm')->name('tupangeadmin.page');
Route::post('signup', 'Auth\RegisterController@signup')->name('signup');

Route::middleware('auth','verified')->group(function(){
   Route::get('dashboard','modules\dashboardController@dashboard')->name('cms.dashboard');

   /*
   * Users
   */
   Route::get('users',['uses' => 'modules\usersController@index','as' => 'users.index']);
   Route::get('users/{id}/details',['uses' => 'modules\usersController@details','as' => 'users.details']);
   Route::get('users/{id}/status/change', ['uses' => 'modules\usersController@changeUserStatus', 'as' => 'user.status.change']);

   /*
   * vendors
   */
   Route::get('vendors',['uses' => 'modules\vendorsController@index','as' => 'vendors.index']);
   Route::get('vendors/{id}/details',['uses' => 'modules\vendorsController@details','as' => 'vendors.details']);
   Route::get('vendors/{id}/services',['uses' => 'modules\vendorsController@services','as' => 'vendors.services']);
   Route::get('vendors/{id}/orders',['uses' => 'modules\vendorsController@orders','as' => 'vendors.orders']);
   Route::get('vendors/{id}/status',['uses' => 'modules\vendorsController@status','as' => 'vendors.status']);
   Route::delete('/vendors/{id}', 'modules\vendorsController@destroy')->name('vendors.destroy');
   Route::get('orders/mark-as-paid/{id}', 'modules\vendorsController@markAsPaid')->name('markAsPaid');
   Route::get('orders/mark-as-not-paid/{id}', 'modules\vendorsController@markAsNotPaid')->name('markAsNotPaid');
   

   /*
   * orders
   */
   Route::get('orders',['uses' => 'modules\ordersController@index','as' => 'orders.index']);
   Route::get('orders/{id}/details',['uses' => 'modules\ordersController@details','as' => 'orders.details']);
   Route::get('orders/export',['uses' => 'modules\ordersController@export','as' => 'orders.export']);

   /*
   * categories
   */
   Route::get('categories',['uses' => 'modules\categoryController@index','as' => 'category.index']);
   Route::get('category/create',['uses' => 'modules\categoryController@create','as' => 'category.create']);
   Route::post('category/store',['uses' => 'modules\categoryController@store','as' => 'category.store']);
   Route::get('category/{id}/edit',['uses' => 'modules\categoryController@edit','as' => 'category.edit']);
   Route::post('category/{id}/update',['uses' => 'modules\categoryController@update','as' => 'category.update']);

   /*
   * reviews
   */
   Route::get('reviews',['uses' => 'modules\reviewsController@index','as' => 'reviews.index']);

   /*
   * cart
   */
   Route::get('cart',['uses' => 'modules\cartController@index','as' => 'cart.index']);

   /*
   * services
   */
   Route::get('services',['uses' => 'modules\servicesController@index','as' => 'services.index']);
   Route::get('/services/create', 'modules\servicesController@create')->name('services.create');
   Route::post('/services', 'modules\servicesController@store')->name('services.store');
   Route::get('/services/{service}/edit', 'modules\servicesController@edit')->name('services.edit');
   Route::put('/services/{service}', 'modules\servicesController@update')->name('services.update');
   Route::delete('/services/{service}', 'modules\servicesController@destroy')->name('services.destroy');
   Route::get('/services/{service}/feature', 'modules\servicesController@feature')->name('services.feature');
   Route::get('/services/{service}/unfeature', 'modules\servicesController@unfeature')->name('services.unfeature');
   Route::get('/services/{service}/disable', 'modules\servicesController@disable')->name('services.disable');
   Route::get('/services/{service}/activate', 'modules\servicesController@activate')->name('services.activate');



   /*
   * reviews
   */
   Route::get('reviews',['uses' => 'modules\reviewsController@index','as' => 'reviews.index']);

   /*
   * payments
   */
   Route::get('payments',['uses' => 'modules\paymentsController@index','as' => 'payments.index']);
   Route::get('/event/payments', ['uses' => 'modules\paymentsController@eventPayments', 'as' => 'payments.events']);


   /*
   * events
   */
   Route::get('events',['uses' => 'modules\eventsController@index','as' => 'events.index']);
   Route::get('events/{id}/details',['uses' => 'modules\eventsController@details','as' => 'events.details']);
   Route::get('/events/categories/create/view', ['uses' => 'modules\eventsController@addEventCategory', 'as' => 'events.categories.create']);
   Route::post('/events/category/create', ['uses' => 'modules\eventsController@createEventCategory', 'as' => 'events.categories.store']);
   Route::get('/events/categories', ['uses' => 'modules\eventsController@categories', 'as' => 'events.categories']);
   Route::get('/events/categories/{id}/edit', ['uses' => 'modules\eventsController@editCategory', 'as' => 'event.categories.edit']);
   Route::post('/events/categories/{id}/update', ['uses' => 'modules\eventsController@updateCategory', 'as' => 'event.categories.update']);

   /*
   * resolution-center
   */
   Route::get('resolution-center',['uses' => 'modules\ResolutionCenterController@index','as' => 'resolution-center.index']);
   Route::get('resolution-center/issue/{id}',['uses' => 'modules\ResolutionCenterController@issueDetails','as' => 'resolution-center.issue']);
   Route::post('resolution-center/response',['uses' => 'modules\ResolutionCenterController@respond','as' => 'resolution-center.response']);
   Route::get('resolution-center/issue/{id}/delete',['uses' => 'modules\ResolutionCenterController@delete', 'as' => 'resolution-center.issue.delete']);

   Route::get('content/footer', [ContentController::class, 'showFooterContent'])->name('content.footer');
   Route::post('content/footer/{id}/update', [ContentController::class, 'updateFooterContent'])->name('content.footer.update');

   Route::get('content/about', [ContentController::class, 'showAboutUsContent'])->name('content.about');
   Route::post('content/about/{id}/update', [ContentController::class, 'updateAboutUs'])->name('content.about.update');

   Route::get('content/faqs', [ContentController::class, 'showFaqs'])->name('content.faqs');
   Route::get('/content/faq/add', [ContentController::class, 'createFaq'])->name('content.faq.add');
   Route::post('content/faq/create', [ContentController::class, 'addFaq'])->name('content.faq.create');
   Route::get('content/faq/{id}', [ContentController::class, 'editFaq'])->name('content.faq.edit');
   Route::post('content/faq/{id}/update', [ContentController::class, 'updateFaq'])->name('content.faq.update');
   Route::get('content/faq/{id}/delete', [ContentController::class, 'deleteFaq'])->name('content.faq.delete');

});
