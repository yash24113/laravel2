<?php

use Illuminate\Support\Facades\Route;
//use \App\Http\Controllers\c1;
use App\Http\Controllers\BoattController;

 use \App\Http\Controllers\log1;
use \App\Http\Controllers\reg1;

use \App\Http\Controllers\demo_login_regi;

use \App\Http\Controllers\h1;

use \App\Http\Controllers\b1;

use \App\Http\Controllers\feed1;

use \App\Http\Controllers\crudcontroller;

use \App\Http\Controllers\crudbook;

use \App\Http\Controllers\homecontroller;

use \App\Http\Controllers\home1controller;

use \App\Http\Controllers\hawaicontroller;

use \App\Http\Controllers\amazingcontroller;

use \App\Http\Controllers\artcontroller;

use \App\Http\Controllers\campcontroller;

use \App\Http\Controllers\snowcontroller;

use \App\Http\Controllers\placecontroller;


use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/', function () {
     return view('welcome');
});


Route::get('home', function () {
    return view('home');
});

Route::view('log','log');
Route::post('log',[log1::class,'index']);
Route::post('log',[log1::class,'insert']);


Route::view('reg','reg');
Route::post('reg',[reg1::class,'insert1']);



Route::view('login','login');

// Route::get('login', function () {
//     return view('login');
// });

// Route::post('login',[project1::class,'insert']);



Route::get('admin', function () {
    return view('admin');
});

Route::view('a_about','a_about');


// Route::post('a_about',[crud::class,'getData']);
// Route::post('a_about',[crud::class,'insert']);

Route::view('hii','hii');




Route::post('reg',[demo_login_regi::class,'add_data']);


Route::post('log',[demo_login_regi::class,'index']);




Route::get('register', function () {
    return view('register');
});

Route::get('home1', function () {
    return view('home1');
});



Route::get('about', function () {
    return view('about');
});

Route::get('service', function () {
    return view('service');
});


Route::get('review', function () {
    return view('review');
});

Route::get('package11', function () {
    return view('package11');
});

// Route::get('book', function () {
//     return view('book');
// });




Route::get('adventure', function () {
    return view('adventure');
});

Route::get('trekking', function () {
    return view('trekking');
});

Route::get('camfire', function () {
    return view('camfire');
});

Route::get('camping', function () {
    return view('camping');
});

Route::get('camp', function () {
    return view('camp');
});

Route::get('snow', function () {
    return view('snow');
});

// Route::get('boating', function () {
//     return view('boating');
// });
// Route::post('boating',[b1::class,'disp_data']); 
// Route::view('boat_form','boat_form');
// Route::post('boat_form',[b1::class,'insert']); 
// Route::post('boat_form',[b1::class,'add_data']); 
// Route::get('boat_disp',[b1::class,'disp_data']); 



// Route::get('hh', function () {
//     return view('hh');
// });

//Route::view('hawai','hawai');
 
// Route::view('hawai_form','hawai_form');
// Route::get('hawai_form',[h1::class,'insert']); 
//  Route::get('boat_disp',[h1::class,'disp_data']);


// Route::post('hawai_form',[h1::class,'add_data']); 
// Route::get('delete/{id}',[b1::class,'del_data']); 


// Route::get('edit/{id}',[b1::class,'fetch_Data']);    # update code
// Route::get('edit',[b1::class,'update_Data']);        #update code



Route::get('arc', function () {
    return view('arc');
});

Route::get('place', function () {
    return view('place');
});

Route::get('amazing', function () {
    return view('amazing');
});



Route::view('feedback','feedback');
Route::get('feed_disp',[feed1::class,'disp_data1']);

Route::post('feedback',[feed1::class,'add_data1']); 



/* booking package value in the form */

Route::get('book/{id}',[crudbook::class,'fetch_data']);
 Route::get('book_boating/{id}',[crudbook::class,'fetch_data1']);
Route::get('book_arc/{id}',[crudbook::class,'fetch_data2']);
Route::get('book_camp/{id}',[crudbook::class,'fetch_data3']);
Route::get('book_hawai/{id}',[crudbook::class,'fetch_data4']);
Route::get('book_place/{id}',[crudbook::class,'fetch_data5']);
Route::get('book_amazing/{id}',[crudbook::class,'fetch_data6']);
Route::get('book_boatts/{id}',[crudbook::class,'fetch_data7']);



Route::post('book',[crudbook::class,'add_data1']); 
Route::get('book_disp',[crudbook::class,'disp_data1']);
//Route::view('book_disp1','book_disp1');
 Route::get('book_disp1',[crudbook::class,'disp_data2']);
Route::get('book',[crudbook::class,'bb']);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('hawai', [hawaicontroller::class, 'dispHomeData11']);

Route::view('insert11', 'insert11');


Route::post('insert11', [hawaicontroller::class, 'addData11']);
Route::get('edit11', [hawaicontroller::class, 'dispData11']);

Route::get('delete11/{id}', [hawaicontroller::class, 'deleteData11']);
Route::get('update11/{id}', [hawaicontroller::class, 'fetchData11']);
Route::post('update11', [hawaicontroller::class, 'updateData11']);
Route::post('hawai',[hawaicontroller::class,'bb']);




Route::get('boating', [crudcontroller::class, 'dispHomeData']);

Route::view('insert', 'insert');


Route::post('insert', [crudcontroller::class, 'addData']);
Route::get('edit', [crudcontroller::class, 'dispData']);

Route::get('delete/{id}', [crudcontroller::class, 'deleteData']);
Route::get('update/{id}', [crudcontroller::class, 'fetchData']);
Route::post('update', [crudcontroller::class, 'updateData']);
Route::post('boating', [b1::class, 'bb']);




Route::get('amazing', [amazingcontroller::class, 'dispHomeData12']);

Route::view('insert12', 'insert12');


Route::post('insert12', [amazingcontroller::class, 'addData12']);
Route::get('edit12', [amazingcontroller::class, 'dispData12']);

Route::get('delete12/{id}', [amazingcontroller::class, 'deleteData12']);
Route::get('update12/{id}', [amazingcontroller::class, 'fetchData12']);
Route::post('update12', [amazingcontroller::class, 'updateData12']);
Route::post('amazing',[amazingcontroller::class,'bb']);





Route::get('arc', [artcontroller::class, 'dispHomeData13']);

Route::view('insert13', 'insert13');


Route::post('insert13', [artcontroller::class, 'addData13']);
Route::get('edit13', [artcontroller::class, 'dispData13']);

Route::get('delete13/{id}', [artcontroller::class, 'deleteData13']);
Route::get('update13/{id}', [artcontroller::class, 'fetchData13']);
Route::post('update13', [artcontroller::class, 'updateData13']);
Route::post('arc',[artcontroller::class,'bb']);




Route::get('camp', [campcontroller::class, 'dispHomeData14']);

Route::view('insert14', 'insert14');


Route::post('insert14', [campcontroller::class, 'addData14']);
Route::get('edit14', [campcontroller::class, 'dispData14']);

Route::get('delete14/{id}', [campcontroller::class, 'deleteData14']);
Route::get('update14/{id}', [campcontroller::class, 'fetchData14']);
Route::post('update14', [campcontroller::class, 'updateData14']);





Route::get('snow', [snowcontroller::class, 'dispHomeData15']);

Route::view('insert15', 'insert15');


Route::post('insert15', [snowcontroller::class, 'addData15']);
Route::get('edit15', [snowcontroller::class, 'dispData15']);

Route::get('delete15/{id}', [snowcontroller::class, 'deleteData15']);
Route::get('update15/{id}', [snowcontroller::class, 'fetchData15']);
Route::post('update15', [snowcontroller::class, 'updateData15']);
Route::post('snow',[snowcontroller::class,'bb']);





Route::get('place', [placecontroller::class, 'dispHomeData16']);

Route::view('insert16', 'insert16');


Route::post('insert16', [placecontroller::class, 'addData16']);
Route::get('edit16', [placecontroller::class, 'dispData16']);

Route::get('delete16/{id}', [placecontroller::class, 'deleteData16']);
Route::get('update16/{id}', [placecontroller::class, 'fetchData16']);
Route::post('update16', [placecontroller::class, 'updateData16']);
Route::post('place',[placecontroller::class,'bb']);





Route::get('home1', [home1controller::class, 'dispHomeData3']);

Route::view('homeinsert1', 'homeinsert1');


Route::post('homeinsert1', [home1controller::class, 'addData3']);
Route::get('homeedit1', [home1controller::class, 'dispData3']);

Route::get('homedelete1/{id}', [home1controller::class, 'deleteData3']);
Route::get('homeupdate1/{id}', [home1controller::class, 'fetchData3']);
Route::post('homeupdate1', [home1controller::class, 'updateData3']);




Route::get('ds',[demo_login_regi::class, 'flush']);

Route::get('as',[demo_login_regi::class, 'flush1']);




Route::get('book_disp1/{id}',[crudbook::class, 'deletebook11']);



Route::view('user','user');
Route::get('user',[demo_login_regi::class,'disp_user']);



Route::view('test','test');


Route::resource('boatt',BoattController::class);


Route::view('temple','temple');
Route::get('temple', [BoattController::class, 'boatt_data']);

