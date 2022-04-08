<?php

Route::prefix('admin')->group(function () {
	Route::get('/admin','Back\AdminController@getLogin')->name('getLogin');
	Route::post('/admin','Back\AdminController@postLogin')->name('postLogin');
	Route::get('/logout','Back\AdminController@getLogOut')->name('getLogOut');



	Route::middleware(['admin'])->group(function () {
		Route::get('/', 'Back\SiteController@getDashboard')->name('getDashboard');

		Route::get('/tum-bloglar', 'Back\BlogController@getAllBlog')->name('getAllBlog');
		Route::get('/blog-ekle', 'Back\BlogController@getAddBlog')->name('getAddBlog');
		Route::post('/blog-ekle','Back\BlogController@postAddBlog')->name('postAddBlog');
		Route::get('/blog-duzenle', 'Back\BlogController@getEditBlog')->name('getEditBlog');
		Route::post('/blog-duzenle','Back\BlogController@postEditBlog')->name('postEditBlog');
		Route::get('/blog-sil', 'Back\BlogController@getDeleteBlog')->name('getDeleteBlog');
		Route::get('/blog-detay', 'Back\BlogController@getDetailBlog')->name('getDetailBlog');

		Route::get('/tum-sorular', 'Back\FAQController@getAllFAQ')->name('getAllFAQ');
		Route::get('/soru-ekle', 'Back\FAQController@getCreateFAQ')->name('getCreateFAQ');
		Route::post('/soru-ekle', 'Back\FAQController@postCreateFAQ')->name('postCreateFAQ');
		Route::get('/soru-duzenle', 'Back\FAQController@getEditFAQ')->name('getEditFAQ');
		Route::post('/soru-duzenle', 'Back\FAQController@postEditFAQ')->name('postEditFAQ');
		Route::get('/soru-sil', 'Back\FAQController@getDeleteFAQ')->name('getDeleteFAQ');
		Route::get('/soru-detay', 'Back\FAQController@getFAQDetail')->name('getFAQDetail');


		Route::get('/tum-mesajlar', 'Back\MessageController@getAllMessage')->name('getAllMessage');
		Route::get('/tum-talep', 'Back\MessageController@getAllOnlineDiet')->name('getAllOnlineDiet');
		Route::get('/mesaj-sil', 'Back\MessageController@getDeleteMessage')->name('getDeleteMessage');
		Route::get('/talep-sil', 'Back\MessageController@getDeleteTalep')->name('getDeleteTalep');
		Route::get('/mesaj-detay', 'Back\MessageController@getMessageDetail')->name('getMessageDetail');



		Route::get('/tum-hizmetler', 'Back\HizmetController@getAllHizmetler')->name('getAllHizmetler');
		Route::get('/hizmet-ekle', 'Back\HizmetController@getCreateHizmetler')->name('getCreateHizmetler');
		Route::post('/hizmet-ekle', 'Back\HizmetController@postCreateHizmetler')->name('postCreateHizmetler');
		Route::get('/hizmet-duzenle', 'Back\HizmetController@getEditHizmetler')->name('getEditHizmetler');
		Route::post('/hizmet-duzenle', 'Back\HizmetController@postEditHizmetler')->name('postEditHizmetler');
		Route::get('/hizmet-sil', 'Back\HizmetController@getDeleteHizmetler')->name('getDeleteHizmetler');
		Route::get('/hizmet-detay', 'Back\HizmetController@getDetail')->name('getDetail');


		Route::get('/footer-setting', 'Back\SettingController@getFooterSetting')->name('getFooterSetting');
		Route::post('/footer-setting', 'Back\SettingController@postFooterSetting')->name('postFooterSetting');

	});
});
