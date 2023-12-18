<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController; //add the ControllerNameSpace
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::resource("anggota", AnggotaController::class);