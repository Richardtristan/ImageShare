<?php

use App\Http\Controllers\ImageuploadController;
use App\Http\Controllers\ViewUploadController;
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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::get('addImg',[ImageuploadController::class, 'image_upload'])->name('image.upload')->middleware(['auth']);
Route::post('addImg',[ImageuploadController::class, 'upload_post_image'])->name('upload.post.image');
Route::post('details',[ImageuploadController::class, 'details_image'])->name('details.post.image');
Route::get('dashboard',[ViewUploadController::class, 'foreach_image'])->name('dashboard');
require __DIR__.'/auth.php';
