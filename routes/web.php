<?php

use App\Http\Controllers\front\HomeController;
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
    return view('home');
});

Route::get('about-us', [HomeController::class, 'aboutUs'])->name('home.about');
Route::get('services', [HomeController::class, 'services'])->name('home.services');
Route::get('projects', [HomeController::class, 'projects'])->name('home.projects');
Route::get('teams', [HomeController::class, 'ourTeam'])->name('home.team');
Route::get('testimonial', [HomeController::class, 'testimonial'])->name('home.testimonial');
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('home.contact');
