<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;

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
})->name('welcome');




Auth::routes();
Route::get('/itemgroup', [ProjectController::class, 'GetItemGroup'])->name('itemgroup');
Route::get('/', [ProjectController::class, 'ShowItemGroup'])->name('welcome');
Route::get('/showproduct/{id}', [ProjectController::class, 'ShowProduct'])->name('showproduct');
Route::post('/addtocart/{id}', [ProjectController::class, 'AddtoCart'])->name('addtocart');
Route::get('/checkout', [ProjectController::class, 'Checkout'])->name('checkout')->middleware('auth');

Route::get('/testapi', [ProjectController::class, 'testapi'])->name('testapi');

Route::get('/total', [ProjectController::class, 'total'])->name('total');



Route::post('/save', [ProjectController::class, 'SaveItemgroup'])->name('saveitemgroup');
Route::get('/del/{x}', [ProjectController::class, 'Del'])->name('del');
Route::get('/edit/{x}', [ProjectController::class, 'Edit'])->name('edit');
Route::post('/update', [ProjectController::class, 'Update'])->name('update');

Route::get('/cpanel', [DashboardController::class, 'DisplayItems'])->name('controlpanel');
Route::get('/addgritem', [DashboardController::class, 'displayadditemsgroup'])->name('addgritem');
Route::get('/additem', [DashboardController::class, 'displayadditems'])->name('additem');
Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');



Route::get('/items', [ProjectController::class, 'GetItems'])->name('items');
Route::post('/saveitems', [ProjectController::class, 'SaveItems'])->name('saveitems');
Route::get('/delete/{x}', [ProjectController::class, 'Delete'])->name('delete');
Route::get('/edititems/{x}', [ProjectController::class, 'EditItems'])->name('edititems');
Route::post('/updateitems', [ProjectController::class, 'UpdateItems'])->name('updateitems');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
