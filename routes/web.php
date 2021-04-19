<?php
use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
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

Route::get('project', function() {
    return view('project');
});


Route::get("{locale}/project", [LocalizationController::class , "project"]);





Route::get('file-upload', [FileUploadController:: class, 'index']);
Route::get('upload', [FileUploadController::class, 'upload'])->name('file.upload');