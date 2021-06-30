<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\PdfController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Question
Route::get('questions',[QuestionController::class,'show']);

// Add qism
Route::post('add',[QuestionController::class,'add']);

// Update
Route::post('update',[QuestionController::class,'update']);

// Delete
Route::post('delete',[QuestionController::class,'delete']);

// PDF
Route::get('pdf',[PdfController::class,'index'])->name('index');
Route::get('download',[PdfController::class,'pdf'])->name('pdf');

Route::view('php','php');
Route::view('php2','php2');