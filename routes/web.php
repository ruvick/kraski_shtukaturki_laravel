<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\CartController;

use App\Http\Controllers\EasyPageController;
use App\Http\Controllers\ProjectController;

use App\Http\Controllers\SenderController;

use App\Http\Controllers\SearchController;

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

Route::get('/', [IndexController::class, "show"])->name('home');
Route::get('/catalog', [CategoryController::class, "show"])->name('catalog');
Route::get('/catalog/{slug}', [CategoryController::class, "show_category"])->name('category');
Route::get('/product/{slug}', [ProductController::class, "show"])->name('product');

Route::get('/contacts', [EasyPageController::class, "contacts"])->name('contacts');
Route::get('/services', [EasyPageController::class, "services"])->name('services');
Route::get('/about', [EasyPageController::class, "about"])->name('about');
Route::get('/policy', [EasyPageController::class, "policy"])->name('policy');

Route::get('/projects', [ProjectController::class, "index"])->name('projects');
Route::get('/projects/{slug}', [ProjectController::class, "project_page"])->name('project_page');


Route::get('/bascet/thencs', [CartController::class, "thencs"])->name("bascet_thencs");
Route::get('/bascet', [CartController::class, "index"])->name("bascet");
Route::post('/bascet/add', [CartController::class, "add"])->name("bascet_add");
Route::post('/bascet/update', [CartController::class, "update"])->name("bascet_update");
Route::get('/bascet/get', [CartController::class, "get_all"])->name("bascet_get");
Route::delete('/bascet/clear', [CartController::class, "clear"])->name("bascet_clear");
Route::delete('/bascet/delete', [CartController::class, "delete"])->name("bascet_delete");
Route::post('/bascet/send', [CartController::class, "send"])->name("bascet_send");
Route::post('/bascet/ocsend', [CartController::class, "send_oc"])->name("bascet_oc_send");

Route::get('/favorites', [FavoriteController::class, "index"])->name("favorites");
Route::get('/favorites/get', [FavoriteController::class, "get_all"])->name("favorites_get");
Route::post('/favorites/add', [FavoriteController::class, "add"])->name("favorites_add");
Route::delete('/favorites/delete', [FavoriteController::class, "delete"])->name("favorites_delete");
Route::delete('/favorites/clear', [FavoriteController::class, "clear"])->name("favorites_clear");

Route::get('/thencs', [SenderController::class, "show_thencs"])->name('thencs');
Route::post('/send_consult', [SenderController::class, "send_consultation"])->name('send_consultation');

Route::get('/search_pds', [SearchController::class, 'search_pds'])->name('search_pds');
Route::get('/search', [SearchController::class, 'show_search_page'])->name('show_search_page');
