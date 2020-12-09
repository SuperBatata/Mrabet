<?php
use App\Dommage;

Route::get('/' , function(){return view('front.user.uza.index');})->name('index');
Route::get('/index' , function(){return view('front.user.uza.index');})->name('index');
Route::get('/about' ,function(){return view('front.user.uza.about');})->name('about');
Route::get('/blog' ,function(){return view('front.user.uza.blog');})->name('blog');;
Route::get('/contact' ,function(){return view('front.user.uza.contact');})->name('contact');;
Route::get('/services' ,function(){return view('front.user.uza.services');})->name('services');;


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tachev', 'TacheController@datatable_valider')->name('tachev');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UsersController',['except'=>['show','create','store']]);
});
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/edit','UsersController',[]);
});
Route::get('cRemorque/{idVoyage}', 'TacheController@fairePhase1')->name('fPhase1');
Route::post('chargement/{id_remorque}', 'DommageController@store');

Route::get('vtache', 'TacheController@index')->name('vtache');
Route::get('vtache_phase2', 'TacheController@datatable_phase2')->name('vtache_phase2');
Route::get('listeRemorque/{idVoyage}', 'TacheController@fairePhase2')->name('fPhase2');
Route::get('cVoyageList', 'voyageController@index')->name('CVoyageList');

Route::get('cVoyage', 'voyageController@showVoyageForm')->name('CVoyage');
Route::post('/cVoyage', 'voyageController@add');
Route::get('edit/{idVoyage}','voyageController@edit');
Route::post('edit/{idVoyage}', 'voyageController@update');
Route::get('delete/{idVoyage}','voyageController@delete');
Route::get('autocomplete', 'voyageController@search');
Route::get('CRegister', 'Auth\RegisterController@showRegistrationForm')->name('CRegister');
Route::post('/CRegister', 'Auth\RegisterController@register');
Route::get('SaissieDommage/{idVoyage}', 'DommageController@postView1')->name('vDommage');
Route::view('edit','edit');
Route::get('cRemorqueview/{idVoyage}', 'remorqueController@cRemorqueview');
Route::get('AddRemorque/{id_remorque}','DommageController@index')->name('DList');
Route::get('listRemorque/{idVoyage}','remorqueController@viewlist')->name('Rlist');
Route::post('cRemorque/{idVoyage}', 'remorqueController@add')->name('addRemorque');
Route::get('deleteRemorque/{id_remorque}','remorqueController@deleteRemorque');
Route::get('validerTache/{id_remorque}','DommageController@validerTache');
Route::get('editDommages/{Dommage_id}','DommageController@editDommage');
Route::post('editDommages/{Dommage_id}', 'DommageController@updateDommage');
Route::get('deleteDommages/{Dommage_id}','DommageController@deleteDommage');
Route::get('cDommagephase1/{id_remorque}','remorqueController@cDommagephase1')->name('cDommagephase1');
Route::get('cDommagephase2/{id_remorque}','remorqueController@cDommagephase2')->name('cDommagephase2');
//<Route:get></Route:get>
Route::resource('Constat', 'ConstatController');
Route::get('/Download/{id}','ConstatController@download');

Route::get('editRemorque/{id_remorque}','remorqueController@editRemorque');
Route::post('editRemorque/{id_remorque}', 'remorqueController@updateRemorque');
Route::post('reset_password_without_token', 'AccountsController@validatePasswordRequest');
Route::post('reset_password_with_token', 'AccountsController@resetPassword');

Route::get('voirtache/{idVoyage}', 'remorqueController@validertache');


/***Container Controller Routes */
Route::get('containerForm/{idVoyage}','ContainerController@index');
Route::POST('addContainer','ContainerController@addContainer')->name('addContainer');
Route::GET('containerList/{idVoyage}','ContainerController@containerList')->name('containerList');
Route::get('editContainer/{id_container}','ContainerController@editContainer')->name('editContainer');
Route::get('deleteContainer/{id_container}','ContainerController@deleteContainer')->name('deleteContainer');
Route::post('updateContainer','ContainerController@updateContainer')->name('updateContainer');
/******************************* */

/***Chargeur Controller Routes */

Route::get('addChargeur','ChargeurController@addChargeur')->name('addChargeur');
Route::post('saveChargeur','Auth\RegisterController@registerChargeur')->name('saveChargeur');
/********************************************************************************************** */

