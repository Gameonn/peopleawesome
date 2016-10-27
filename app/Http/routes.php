<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WebController@index');
Route::get('administrator/', 'AdminAuthController@login');

Route::get('home', 'WebController@index');
Route::get('home2', 'WebController@home2');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('about-us', array('uses' => 'WebController@aboutUs', 'as' => 'web.aboutUs'));

Route::get('contact-us', array('uses' => 'WebController@contactUs', 'as' => 'web.contactUs'));

Route::get('faq', array('uses' => 'WebController@faq', 'as' => 'web.faq'));

Route::get('privacy-policy', array('uses' => 'WebController@privacyPolicy', 'as' => 'web.privacyPolicy'));

Route::get('terms-conditions', array('uses' => 'WebController@terms', 'as' => 'web.terms'));

Route::get('upload-video-terms', array('uses' => 'WebController@uploadVideoTerms', 'as' => 'web.uploadVideoTerms'));

Route::get('mailing-list', array('uses' => 'WebController@MailingList', 'as' => 'web.MailingList'));

Route::post('add-mailing-list', array('uses' => 'WebController@addMailingList', 'as' => 'web.addMailingList'));

Route::get('submit-video', array('uses' => 'WebController@submitVideo', 'as' => 'web.submitVideo'));

Route::post('upload-video', array('uses' => 'WebController@uploadVideo', 'as' => 'web.uploadVideo'));

Route::post('send-feedback', array('uses' => 'WebController@sendFeedback', 'as' => 'web.sendFeedback'));


//*************************************************************************************
//*************************************************************************************
// 										Admin Routes
//*************************************************************************************
//*************************************************************************************

Route::group(array('prefix'=>'administrator'),function(){

	Route::get('login', array('uses' => 'AdminAuthController@login', 'as' => 'admin.login'));

	Route::post('login', array('uses' => 'AdminAuthController@loginCode', 'as' => 'admin.loginCode'));

	Route::get('logout', array('uses' => 'AdminAuthController@logout', 'as' => 'admin.logout'));

	Route::get('dashboard', array('uses' => 'AdminController@dashboard', 'as' => 'admin.dashboard'));

	Route::get('video-listing', array('uses' => 'AdminController@videoListing', 'as' => 'admin.videoListing'));

	Route::post('set-video-status', array('uses' => 'AdminController@setVideoStatus', 'as' => 'admin.setVideoStatus'));

	Route::get('message-listing', array('uses' => 'AdminController@messageListing', 'as' => 'admin.messageListing'));

	Route::get('mail-listing', array('uses' => 'AdminController@mailListing', 'as' => 'admin.mailListing'));


});