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
function f($path){
	$data['body']='frontend.'.$path;
	return $data;
}

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
		Route::get("/manufactures", "FrontendController@manuf")->name("manuf");
		// one manufacture
		Route::get("/manufacture/{id}", "FrontendController@onemanuf")->name("onemanuf");
		// one manufacture gallery
		Route::get("/manufgallery/{id}", "FrontendController@manufgallery")->name("manufgallery");
		// modernization
		Route::get("/modern", "FrontendController@modern")->name("modern");
		// modernization gallery
		Route::get("/modern/{id}", "FrontendController@modern_gallery")->name("modern_gallery");
		
		// structure of factory
		Route::get("/structures", "FrontendController@structure")->name("structures");
		Route::get("/str/{id}", "FrontendController@str")->name("one_str");
		// one manufacture gallery
		Route::get("/str_gal/{id}", "FrontendController@str_gal")->name("str_gal");
		// tenders
		Route::get("/tender", "FrontendController@tender")->name("tender");
		// komitets
		Route::view("/komitets",'frontend.index', f('komitets.komitets'))->name('komitets');
		// one prof_komitet
		Route::view("/prof_komitet", 'frontend.index',f('komitets.prof_komitet'))->name("prof_komitet");
		// soyuz molodeji
		Route::view("/commity/{title}",'frontend.index', f('komitets.gallery'))->name("commity");
		// soyuz molodeji
		Route::view("/burchimullo",'frontend.index', f('komitets.burchimullo'))->name("burchimullo");
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
		
		
	});
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
	return view('dashboard');
})->name('dashboard');


