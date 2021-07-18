<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/employee',function(){
    return view('sk');
});

Route::get('/abc/employee',function(){
    return view('abc.ab');  
});
Route::get('/abc',function(){
    return view('abc.def.ghi.hi');  
});
Route::get('/test/controller/{name}/{second}/{third}',[EmployeeController::class,'show']);

Route::get('/sum/display',[EmployeeController::class,'index']);
Route::get('/abc/{id}',[EmployeeController::class,'display']);
Route::post('/req/pos',[EmployeeController::class,'forPostRequest']);

Route::get('/blade/demo',[EmployeeController::class,'bladeDemo']);

//Route::get('/nav',function(){
//    return view('layout.main');
//});test