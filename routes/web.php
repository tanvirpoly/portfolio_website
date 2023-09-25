<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\ServicePagesController;
use App\Http\Controllers\PortfolioPagesController;
use App\Http\Controllers\AboutPagesController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\TeamPagesController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


// Frontend
Route::get('/', [PagesController::class, 'index'])->name('home');



Route::prefix('admin')->group(function(){

// Backend
Route::get('/dashboard', [MainPagesController::class, 'admin'])->name('admin.dashboard');

// Main
Route::get('/main', [MainPagesController::class, 'index'])->name('admin.main');
Route::put('/main', [MainPagesController::class, 'update'])->name('admin.main.update');

// Services
Route::get('/services/create', [ServicePagesController::class, 'create'])->name('admin.services.create');
Route::post('/services/create', [ServicePagesController::class, 'store'])->name('admin.services.store');
Route::get('/services/list', [ServicePagesController::class, 'list'])->name('admin.services.list');
Route::get('/services/edit/{id}', [ServicePagesController::class, 'edit'])->name('admin.services.edit');
Route::post('/services/update/{id}', [ServicePagesController::class, 'update'])->name('admin.services.update');
Route::delete('/services/destroy/{id}', [ServicePagesController::class, 'destroy'])->name('admin.services.destroy');

// Portfolio
Route::get('/portfolios/create', [PortfolioPagesController::class, 'create'])->name('admin.portfolios.create');
Route::put('/portfolios/create', [PortfolioPagesController::class, 'store'])->name('admin.portfolios.store');
Route::get('/portfolios/list', [PortfolioPagesController::class, 'list'])->name('admin.portfolios.list');
Route::get('/portfolios/edit/{id}', [PortfolioPagesController::class, 'edit'])->name('admin.portfolios.edit');
Route::post('/portfolios/update/{id}', [PortfolioPagesController::class, 'update'])->name('admin.portfolios.update');
Route::delete('/portfolios/destroy/{id}', [PortfolioPagesController::class, 'destroy'])->name('admin.portfolios.destroy');

// About
Route::get('/abouts/create', [AboutPagesController::class, 'create'])->name('admin.abouts.create');
Route::put('/abouts/create', [AboutPagesController::class, 'store'])->name('admin.abouts.store');
Route::get('/abouts/list', [AboutPagesController::class, 'list'])->name('admin.abouts.list');
Route::get('/abouts/edit/{id}', [AboutPagesController::class, 'edit'])->name('admin.abouts.edit');
Route::post('/abouts/update/{id}', [AboutPagesController::class, 'update'])->name('admin.abouts.update');
Route::delete('/abouts/destroy/{id}', [AboutPagesController::class, 'destroy'])->name('admin.abouts.destroy');

// Team
Route::get('/teams/create', [TeamPagesController::class, 'create'])->name('admin.teams.create');
Route::put('/teams/create', [TeamPagesController::class, 'store'])->name('admin.teams.store');
Route::get('/teams/list', [TeamPagesController::class, 'list'])->name('admin.teams.list');
Route::get('/teams/edit/{id}', [TeamPagesController::class, 'edit'])->name('admin.teams.edit');
Route::post('/teams/update/{id}', [TeamPagesController::class, 'update'])->name('admin.teams.update');
Route::delete('/teams/destroy/{id}', [TeamPagesController::class, 'destroy'])->name('admin.teams.destroy');

});

// Contact Page

Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');




Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

