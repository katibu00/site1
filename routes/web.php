<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\COntactUsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserBlogController;
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

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/request-demo', [FrontendController::class, 'requestDemo'])->name('request-demo');
Route::post('/request-demo', [FrontendController::class, 'requestDemoSubmit']);


Route::get('/support', function(){
    return view('frontend.support');
})->name('support');

Route::get('/about', function(){
    return view('frontend.about');
})->name('about');

Route::get('/features', function(){
    return view('frontend.features');
})->name('features');

Route::get('/try-for-free', function(){
    return view('frontend.try');
})->name('try');

Route::get('/thank_you', function () {
    return view('frontend.thank_you');
})->name('thank_you');


Route::get('/system-admin', [LoginController::class, 'index'])->name('system-admin');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/blogs',[UserBlogController::class, 'index'])->name('user.blogs.index');
Route::get('/blogs/{slug}', [UserBlogController::class, 'show'])->name('blog.show');
Route::get('/contact-us',[COntactUsController::class, 'index'])->name('user.contact.index');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('/blogs', [AdminBlogController::class, 'index'])->name('admin.blogs.index');
    Route::post('/blogs/store', [AdminBlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('/blogs/create', [AdminBlogController::class, 'create'])->name('admin.blogs.create');
    Route::get('blogs/{article}/edit', [AdminBlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::delete('blogs/{article}', [AdminBlogController::class, 'destroy'])->name('admin.blogs.destroy');
    Route::put('/blogs/{article}', [AdminBlogController::class, 'update'])->name('admin.blogs.update');

    Route::get('/demo_requests', [AdminController::class, 'demoIndex'])->name('admin.demos.index');


});


Route::get('/careers',[CareersController::class, 'index'])->name('careers.index');
Route::get('/careers/sales-associates',[CareersController::class, 'details'])->name('careers.details');




