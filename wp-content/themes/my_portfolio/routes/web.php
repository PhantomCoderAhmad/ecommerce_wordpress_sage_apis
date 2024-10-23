<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontPage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageProjects;

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

Route::get('/', [FrontPage::class, 'index']);
Route::get('/projects', [PageProjects::class, 'projectsList']);
Route::get('/projects/{slug}', [PageProjects::class, 'project']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.send');

