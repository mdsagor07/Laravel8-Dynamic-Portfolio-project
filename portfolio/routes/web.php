<?php

use Illuminate\Support\Facades\Route;
use app\Models\User;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\CategoryController;


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
    
    $users=User::all();
    return view('dashboard',compact('users'));
})->name('dashboard');

Route:: get('/category/all',[CategoryController::class,'Allcat'])->name('all.category');
Route:: post('/category/add',[CategoryController::class,'Addcat'])->name('store.category');
