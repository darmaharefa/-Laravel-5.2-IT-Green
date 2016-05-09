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

//Route untuk Page Static

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/', "PostController@getIndex");
Route::get('/about', "PagesController@getAbout");

//Route User Biasa untuk Jenis Tanaman
Route::get('/jenis/{jenis_id}', "PostController@getJenis");
Route::get('/jenis/{jenis_id}/{slug}', "PostController@getDetailJenis");

//Route User Biasa untuk Solusi Kerusakan Tanaman
Route::get('/solusi/{solusi_id}', "PostController@getSolusi");
Route::get('/solusi/{solusi_id}/{slug}', "PostController@getDetailSolusi");

//Router User Biasa untuk Cara dan Tips Menanam
Route::get("/tips", "PostController@getTips");
Route::get("/tips/{slug}", "PostController@getDetailTips");


//Route untuk Authentikasi
//
// Login Route
Route::get("auth/login", "Auth\AuthController@getLogin");
Route::post("auth/login", "Auth\AuthController@postLogin");
Route::get("auth/logout", "Auth\AuthController@getLogout");

//Register Route
Route::get("auth/register", "Auth\AuthController@getRegister");
Route::post("auth/register", "Auth\AuthController@postRegister");


//Route Admin untuk Dasboard
//Dashboard -> Jenis Tanaman, Tambah Jenis Tanaman
//Dashboard -> Solusi Kerusakan, Tambah Solusi
Route::get('/dashboard', "DashboardController@getIndex");

//Router Admin untuk Jenis Tanaman
Route::post('/dashboard/jenis',"DashboardController@postSaveJenis");
Route::put('/dashboard/jenis/{id_solusi}/{id}', 
		["as"=>"jenis.update","uses"=>"DashboardController@putUpdateJenis"]);
Route::delete("/dashboard/jenis/{id_jenis}/{id}",
	["as"=>"jenis.delete","uses"=>"DashboardController@deleteJenis"]);
Route::get('/dashboard/jenis/{id_jenis}/{id}/edit',
		["as"=>"jenis.edit","uses"=>"DashboardController@getEditJenis"]);
Route::get('/dashboard/jenis/create', "DashboardController@getTambahJenis");
Route::get('/dashboard/jenis/{id_jenis}', ['as' => 'jenis.show', 'uses' => "DashboardController@getJenis"]);

//Router Admin untuk Solusi Kerusakan Tanaman
Route::post('/dashboard/solusi',"DashboardController@postSaveSolusi");
Route::put('/dashboard/solusi/{id_solusi}/{id}', 
		["as"=>"solusi.update","uses"=>"DashboardController@putUpdateSolusi"]);
Route::delete("/dashboard/solusi/{id_solusi}/{id}",
	["as"=>"solusi.delete","uses"=>"DashboardController@deleteSolusi"]);
Route::get('/dashboard/solusi/{id_solusi}/{id}/edit',
		["as"=>"solusi.edit","uses"=>"DashboardController@getEditSolusi"]);
Route::get('/dashboard/solusi/create', "DashboardController@getTambahSolusi");
Route::get('/dashboard/solusi/{id_solusi}', 
		['as' => 'solusi.show', 'uses' => "DashboardController@getSolusi"]);

//Route Admin untuk Cara dan Tips Menanam
Route::post("/dashboard/tips", "DashboardController@postSaveTips");
Route::put("/dashboard/tips/{id_tips}","DashboardController@putUpdateTips");
Route::delete("/dashboard/tips/{id_tips}","DashboardController@deleteTips");
Route::get("/dashboard/tips", ['as' => 'tips.show', 'uses'=> "DashboardController@getIndexTips"]);
Route::get("/dashboard/tips/{id_tips}/edit", "DashboardController@getEditTips");
Route::get("/dashboard/tips/create", "DashboardController@getTambahTips");
// Route::get("/dashboard/tips/{id}", "DashboardController@getTips");