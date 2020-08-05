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

Route::get('/', '\glorifiedking\BusTravel\Http\Controllers\FrontendController@homepage')->name('bustravel.homepage');
Route::post('/', '\glorifiedking\BusTravel\Http\Controllers\FrontendController@search_routes')->name('bustravel.homepage.search.routes');
Route::get('/bt-add-cart/{id}/{date}/{type?}/{quantity?}', '\glorifiedking\BusTravel\Http\Controllers\FrontendController@add_to_basket')->name('bustravel.add_to_basket');
Route::get('/bt-cart', '\glorifiedking\BusTravel\Http\Controllers\FrontendController@cart')->name('bustravel.cart');
Route::get('/bt-clear-cart','\glorifiedking\BusTravel\Http\Controllers\FrontendController@clear_cart')->name('bustravel.cart.clear');
Route::any('/payment/callback','\glorifiedking\BusTravel\Http\Controllers\FrontendController@process_payment_callback')->name('bustravel.payment.callback');
Route::any('/payment/credit_callback','\glorifiedking\BusTravel\Http\Controllers\FrontendController@credit_request_callback')->name('bustravel.credit.callback');
Route::get('/bt-remove-cart-item/{id}','\glorifiedking\BusTravel\Http\Controllers\FrontendController@remove_cart_item')->name('bustravel.cart.remove.item');
Route::get('/bt-checkout','\glorifiedking\BusTravel\Http\Controllers\FrontendController@checkout')->name('bustravel.cart.checkout');
Route::post('/bt-checkout','\glorifiedking\BusTravel\Http\Controllers\FrontendController@process_payment')->name('bustravel.cart.pay');
Route::get('/bt-checkout-complete','\glorifiedking\BusTravel\Http\Controllers\FrontendController@checkout_result')->name('bustravel.cart.checkout.result');
Route::get('/bt-test-momo','\glorifiedking\BusTravel\Http\Controllers\ApiController@show_debit_test_form')->name('bustravel.momo.test.form');
Route::post('/bt-test-momo','\glorifiedking\BusTravel\Http\Controllers\ApiController@send_debit_request')->name('bustravel.api.debit');
Route::get('/bt-bus-times','\glorifiedking\BusTravel\Http\Controllers\FrontendController@bus_times')->name('bustravel.bus.times');
Route::get('/bt-stations','\glorifiedking\BusTravel\Http\Controllers\FrontendController@stations')->name('bustravel.bus.stations');
Route::get('/bt-faqs','\glorifiedking\BusTravel\Http\Controllers\FrontendController@faqs')->name('bustravel.bus.faqs');
Route::any('/ussd','\glorifiedking\BusTravel\Http\Controllers\ApiController@ussd')->name('bustravel.ussd');
Route::any('/ticket-boarding','\glorifiedking\BusTravel\Http\Controllers\ApiController@ticket_scan')->name('bustravel.ticket.scan');
Route::any('/payment/result','\glorifiedking\BusTravel\Http\Controllers\FrontendController@checkout_result')->name('bustravel.payment.result');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
