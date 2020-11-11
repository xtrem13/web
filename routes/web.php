<?php

use Illuminate\Support\Facades\Route;

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
// image retriver
Route::get('img', function () {
    $path = urldecode($_GET['path']);
    $file = Storage::get($path);
    $type = mime_content_type(storage_path()."/app/".$path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('img');


/*=============Public routes========================*/
Route::namespace('App\Http\Controllers')->group(function () {
	// redirect
	Route::get("/", "FrontendController@default")->name("default");
	Route::prefix("{l}")->group(function(){
		// home
		Route::get("/", "FrontendController@home")->name("home");
		// about us
		Route::get("/about", "FrontendController@about")->name("about");
		// manufactures
		Route::get("/manuf", "FrontendController@manuf")->name("manuf");
		// modernization
		Route::get("/modern", "FrontendController@modern")->name("modern");
		// structure of factory
		Route::get("/structure", "FrontendController@structure")->name("structure");
		// tenders
		Route::get("/tender", "FrontendController@tender")->name("tender");
		// komitets
		Route::get("/komitets", "FrontendController@komitets")->name("komitets");
		// komitets
		Route::get("/price", "FrontendController@price")->name("price");
		// one zavod
		Route::get("/zavod/{id}", "FrontendController@zavod")->name("zavod");
		// one zavod gallery
		Route::get("/zavgallery/{id}", "FrontendController@zavgallery")->name("zavgallery");
		// one history
		Route::get("/history/{id}", "FrontendController@history")->name("history");
		// historical_gallery
		Route::get("/historical_gallery", "FrontendController@historical_gallery")->name("historical_gallery");
		// one manufacture
		Route::get("/manuf/{id}", "FrontendController@onemanuf")->name("onemanuf");
		// one manufacture gallery
		Route::get("/manufgallery/{id}", "FrontendController@manufgallery")->name("manufgallery");
		
	});
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
	return view('dashboard');
})->name('dashboard');


