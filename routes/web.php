<?php
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\EnrolmentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Program Routes
Route::get('/create-program', [ProgramController::class, 'create_program'])->name('create-program');
Route::post('save-program',[ProgramController::class,'store_program'])->name('save-program');

//Client Routes
Route::get('/create-client', [ClientController::class, 'create_client'])->name('create-client');
Route::post('/save-client', [ClientController::class, 'store_client'])->name('save-client');

//Enrolment Routes
Route::get('/create-enrollment', [EnrolmentController::class, 'create_enrollment'])->name('create-enrollment');
Route::post('/save-enrollment', [EnrolmentController::class, 'store_enrollment'])->name('save-enrollment');