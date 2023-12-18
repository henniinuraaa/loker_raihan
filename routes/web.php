<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PerusahaanController;
use Illuminate\Support\Facades\Route;


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


    Route::middleware(['guest'])->group(function () {
    Route::get('/', [UserController::class,'index']);
    Route::post('/', [UserController::class,'login']);
    });
    Route::get('/login', function(){
        return redirect('/admin');
    });

    Route::get('/logout', [UserController::class,'logout']);
    Route::get('/tampilperushaan', [UserController::class,'show']);
    Route::get('/tampilan', [AdminController::class,'show']);
    
//posting
Route::get('/posting',[PostingController::class,'view']);
Route::get('/dataposting',[PostingController::class,'show']);
Route::post('/posting/post',[PostingController::class,'post']);
Route::get('/viewposting',[PostingController::class,'index']);
Route::get('/postinghapus/{id}',[PostingController::class,'destroy']);
Route::get('/posting/edit/{id}',[PostingController::class,'edit']);
Route::post('/posting/update/{id}',[PostingController::class,'update']);
Route::get('posting/add',[PostingController::class,'add']);
Route::post('posting/create',[PostingController::class,'create']);

Route::get('/landingpages', [UserController::class,'show']);
