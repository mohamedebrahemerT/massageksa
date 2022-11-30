<?php

//Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){


// config::set('auth.defines','admin');

Route::get('vue_js', function () {

    return view('Admin.vue_js');
});

/// AfterPyment
Route::resource('admin/AfterPyment', 'AfterPymentController');
Route::delete('admin/AfterPyment/destory/all', 'AfterPymentController@destoryall');
Route::post('admin/AfterPyment/{id}', 'AfterPymentController@update');

Route::post('admin/update_img_dropzon_AfterPyment/img/{id}', 'AfterPymentController@update_img_dropzon_AfterPyment');

Route::post('admin/delete_img_dropzon_AfterPyment/img/{id}', 'AfterPymentController@delete_img_dropzon_AfterPyment');
/////////////


/// AfterPaymentOrders
Route::resource('admin/AfterPaymentOrders', 'AfterPaymentOrdersController');
Route::delete('admin/AfterPaymentOrders/destory/all', 'AfterPaymentOrdersController@destoryall');
Route::post('admin/AfterPaymentOrders/{id}', 'AfterPaymentOrdersController@update');

Route::post('admin/update_img_dropzon_AfterPaymentOrders/img/{id}', 'AfterPaymentOrdersController@update_img_dropzon_AfterPaymentOrders');

Route::post('admin/delete_img_dropzon_AfterPaymentOrders/img/{id}', 'AfterPaymentOrdersController@delete_img_dropzon_AfterPaymentOrders');
/////////////


/// AfterPaymentorder_product
Route::resource('admin/AfterPaymentorder_product', 'AfterPaymentorder_productController');
Route::delete('admin/AfterPaymentorder_product/destory/all', 'AfterPaymentorder_productController@destoryall');
Route::post('admin/AfterPaymentorder_product/{id}', 'AfterPaymentorder_productController@update');

Route::post('admin/update_img_dropzon_AfterPaymentorder_product/img/{id}', 'AfterPaymentorder_productController@update_img_dropzon_AfterPaymentorder_product');

Route::post('admin/delete_img_dropzon_AfterPaymentorder_product/img/{id}', 'AfterPaymentorder_productController@delete_img_dropzon_AfterPaymentorder_product');
/////////////


Route::get('admin/mailgun', 'mailguncontroller@index');


Route::get('addmin__register', 'admins@register');
Route::post('rr', 'admins@tt');


Route::get('admin_login', 'admins@view_login');
Route::post('admin_form_post', 'admins@login');


Route::get('Admin_logout', 'admins@Admin_logout_fun');
Route::get('admin/Admin_logout', 'admins@Admin_logout_fun');

Route::get('admin_form_post/Admin_logout', 'admins@Admin_logout_fun');


Route::get('forgot_admin_password', 'admins@forgot_password');
Route::post('admin_reset_pass', 'admins@reset_pass');

Route::get('admin_reset_pass_add_new/{token}', 'admins@admin_reset_pass_add_new_get');
Route::post('admin_reset_pass_add_new_post/{token}', 'admins@admin_reset_pass_add_new_post');


Route::group(['middleware' => 'admin:admin'], function () {

    // Route::get('admin/datatable','admins@getdata');

    Route::get('admin/sSearch ', function () {

    });

    Route::resource('/admin/admins', 'admindata');

    Route::resource('/admin/users', 'users');
    Route::get('/admin/users/{id}/activation', 'users@activation')->name('users.activation');
    Route::resource('/admin/userRquiest', 'USERRQUIESTCONTROLLER');
    Route::delete('admin/userRquiest/destroy/all', 'USERRQUIESTCONTROLLER@multi_delete');


    Route::resource('admin/counteries', 'countriess');
    Route::resource('admin/cities', 'citiess');
    Route::resource('admin/states', 'statesss');
    Route::resource('admin/departments', 'DepartmentsController');

    Route::resource('admin/trademarks', 'TradeMarksController');
    Route::delete('admin/trademarks/destroy/all', 'TradeMarksController@multi_delete');

    Route::resource('admin/manufacturers', 'ManufacturersController');

    Route::resource('admin/shipping', 'ShippingController');

    Route::resource('admin/malls', 'MallsController');

    Route::resource('admin/colors', 'ColorsController');
    Route::resource('admin/sizes', 'sizesController');
    Route::resource('admin/weight', 'weightController');
    Route::resource('admin/productes', 'productesController');


    Route::post('admin/upload/img/{id}', 'productesController@upload_img');

    Route::post('admin/delete_img_dropzon', 'productesController@delete_img');

    Route::post('admin/update_img_dropzon_product/img/{id}', 'productesController@update_img_dropzon_product');

    Route::post('delete_img_dropzon_product/{id}', 'productesController@delete_img_dropzon_product');

    Route::post('admin/load_dep_v_size_weight', 'productesController@load_dep_v_size_weight');

    Route::post('admin/DELET_PRODUCT/{id}', 'productesController@DELET_PRODUCT');


    Route::get('admin/sUrl', function () {

    });


    Route::delete('admin/datatable/destory/all', 'admindata@destoryall');
    Route::delete('users/datatable/destory/all', 'users@destoryall');
    Route::delete('admin/countries/destory/all', 'countriess@destoryall');
    Route::delete('admin/cities/destory/all', 'citiess@destoryall');
    Route::delete('admin/states/destory/all', 'statesss@destoryall');
    Route::delete('admin/manufacturers/destroy/all', 'ManufacturersController@multi_delete');
    Route::delete('admin/shipping/destroy/all', 'ShippingController@multi_delete');
    Route::delete('admin/malls/destroy/all', 'MallsController@multi_delete');
    Route::delete('admin/colors/destroy/all', 'ColorsController@multi_delete');
    Route::delete('admin/sizes/destroy/all', 'sizesController@multi_delete');
    Route::delete('admin/weight/destroy/all', 'weightController@multi_delete');
    Route::delete('admin/productes/destroy/all', 'productesController@multi_delete');


    Route::get('admin/settings', 'setting@index');
    Route::post('admin/setting_store', 'setting@setting_store');

    // Route::get('admin_reset_pass_add_new_get/{token}','admins@admin_reset_pass_add_new');


    ////////////////////////////////// newes data
    Route::get('admin/newes', 'newesController@index')->name('ajaxdata');

    Route::get('ajaxdata/getdata', 'newesController@getdata')->name('newes.getdata');

    Route::post('ajaxdata/postdata', 'newesController@postdata')->name('ajaxdata.postdata');

    Route::get('ajaxdata/fetchdata', 'newesController@fetchdata')->name('ajaxdata.fetchdata');
    Route::get('ajaxdata/removedata', 'newesController@removedata')->name('ajaxdata.removedata');
    Route::get('ajaxdata/massremove', 'newesController@massremove')->name('ajaxdata.massremove');
//////////////////////////////////////

    Route::post('admin/sendEmail_admin_comunication', 'admins@sendMAil');

    ////////////////////////////////// newes data
    Route::get('admin/Coupons', 'CouponsController@index')->name('Coupons');

    Route::get('Coupons/getdata', 'CouponsController@getdata')->name('Coupons.getdata');

    Route::post('Coupons/postdata', 'CouponsController@postdata')->name('Coupons.postdata');

    Route::get('Coupons/fetchdata', 'CouponsController@fetchdata')->name('Coupons.fetchdata');
    Route::get('Coupons/removedata', 'CouponsController@removedata')->name('Coupons.removedata');
    Route::get('Coupons/massremove', 'CouponsController@massremove')->name('Coupons.massremove');
//////////////////////////////////////


    Route::get('admin', function () {
        return view('Admin.home');
    });


    Route::get('admin/destory', function () {

        if (session()->has('lang')) {
            session()->forget('lang');
        }
        return back()->withInput();

    });


});


Route::get('admin/lang/{lang}', function ($lang) {


    if ($lang == 'ar') {

        session()->put('lang', 'ar');


        \App::setLocale($lang);

        return redirect('index');


    } else {

        session()->put('lang', 'en');

        \App::setLocale('en');


        return redirect('/');

    }


}


);


//});


Route::prefix('manage')->group(function () {

    Route::get('/client', 'admin@index');

});


/// who we are
Route::resource('admin/WhoWeAre', 'WhoWeAresController');
Route::delete('admin/WhoWeAre/destory/all', 'WhoWeAresController@destoryall');
Route::post('admin/WhoWeAre/{id}', 'WhoWeAresController@update');

Route::post('admin/update_img_dropzon_WhoWeAre/img/{id}', 'WhoWeAresController@update_img_dropzon_WhoWeAre');

Route::post('admin/delete_img_dropzon_WhoWeAre/img/{id}', 'WhoWeAresController@delete_img_dropzon_WhoWeAre');
/////////////


/// VisionMission
Route::resource('admin/VisionMission', 'VisionMissionsController');
Route::delete('admin/VisionMission/destory/all', 'VisionMissionsController@destoryall');
Route::post('admin/VisionMission/{id}', 'VisionMissionsController@update');

Route::post('admin/update_img_dropzon_VisionMission/img/{id}', 'VisionMissionsController@update_img_dropzon_VisionMission');

Route::post('admin/delete_img_dropzon_VisionMission/img/{id}', 'VisionMissionsController@delete_img_dropzon_VisionMission');
/////////////

/// Objectives
Route::resource('admin/Objectives', 'ObjectivessController');
Route::delete('admin/Objectives/destory/all', 'ObjectivessController@destoryall');
Route::post('admin/Objectives/{id}', 'ObjectivessController@update');

Route::post('admin/update_img_dropzon_Objectives/img/{id}', 'ObjectivessController@update_img_dropzon_Objectives');

Route::post('admin/delete_img_dropzon_Objectives/img/{id}', 'ObjectivessController@delete_img_dropzon_Objectives');
/////////////


/// newes
Route::resource('admin/newes', 'newessController');
Route::delete('admin/newes/destory/all', 'newessController@destoryall');
Route::post('admin/newes/{id}', 'newessController@update');

Route::post('admin/update_img_dropzon_newes/img/{id}', 'newessController@update_img_dropzon_newes');

Route::post('admin/delete_img_dropzon_newes/img/{id}', 'newessController@delete_img_dropzon_newes');
/////////////


/// Maincategories
Route::resource('admin/Maincategories', 'MaincategoriessController');
Route::delete('admin/Maincategories/destory/all', 'MaincategoriessController@destoryall');
Route::post('admin/Maincategories/{id}', 'MaincategoriessController@update');

Route::post('admin/update_img_dropzon_Maincategories/img/{id}', 'MaincategoriessController@update_img_dropzon_Maincategories');

Route::post('admin/delete_img_dropzon_Maincategories/img/{id}', 'MaincategoriessController@delete_img_dropzon_Maincategories');
/////////////

/// subcategories
Route::resource('admin/subcategories', 'subcategoriessController');
Route::delete('admin/subcategories/destory/all', 'subcategoriessController@destoryall');
Route::post('admin/subcategories/{id}', 'subcategoriessController@update');

Route::post('admin/update_img_dropzon_subcategories/img/{id}', 'subcategoriessController@update_img_dropzon_subcategories');

Route::post('admin/delete_img_dropzon_subcategories/img/{id}', 'subcategoriessController@delete_img_dropzon_subcategories');
/////////////

/// Ourworks
Route::resource('admin/Ourworks', 'OurworkssController');
Route::delete('admin/Ourworks/destory/all', 'OurworkssController@destoryall');
Route::post('admin/Ourworks/{id}', 'OurworkssController@update');

Route::post('admin/update_img_dropzon_Ourworks/img/{id}', 'OurworkssController@update_img_dropzon_Ourworks');

Route::post('admin/delete_img_dropzon_Ourworks/img/{id}', 'OurworkssController@delete_img_dropzon_Ourworks');
/////////////


/// FAQs
Route::resource('admin/FAQs', 'FAQsController');
Route::delete('admin/FAQs/destory/all', 'FAQsController@destoryall');
Route::post('admin/FAQs/{id}', 'FAQsController@update');

Route::post('admin/update_img_dropzon_WhoWeAre/img/{id}', 'WhoWeAresController@update_img_dropzon_FAQs');

Route::post('admin/delete_img_dropzon_FAQs/img/{id}', 'FAQsController@delete_img_dropzon_FAQs');
/////////////


///ourTeam
Route::resource('admin/ourTeam', 'ourTeamController');
Route::delete('admin/ourTeam/destory/all', 'ourTeamController@destoryall');
Route::post('admin/ourTeam/{id}', 'ourTeamController@update');

Route::post('admin/update_img_dropzon_ourTeam/img/{id}', 'ourTeamController@update_img_dropzon_ourTeam');

Route::post('admin/delete_img_dropzon_ourTeam/img/{id}', 'ourTeamController@delete_img_dropzon_ourTeam');
/////////////

Route::resource('admin/Sendcontact', 'SendcontactsController');


Route::delete(' admin/Sendcontact/destory/all', 'SendcontactsController@destoryall');


/// photoes
Route::resource('admin/photoes', 'photoessController');
Route::delete('admin/photoes/destory/all', 'photoessController@destoryall');
Route::post('admin/photoes/{id}', 'photoessController@update');

Route::post('admin/update_img_dropzon_photoes/img/{id}', 'photoessController@update_img_dropzon_photoes');

Route::post('admin/delete_img_dropzon_photoes/img/{id}', 'photoessController@delete_img_dropzon_photoes');
/////////////

Route::get('forget', function () {
    if (session()->has('lang')) {
        session()->forget('lang');
    }
    return back()->withInput();


});






Route::get('mailgunTest', function () {

    $data = [
        'title' => 'title',
        'content' => 'content'


    ];


});

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

