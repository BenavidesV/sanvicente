<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Products;
use App\Http\Livewire\SupplierProducts;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\ProfileUser;


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
Route::get('/search', function () {
  return view('search');
});
Route::get('supplier-products/{user_id}/{product_id}', [SupplierProducts::class, 'render']);
Route::get('/supplier/{supplier_id}', [SupplierProducts::class, 'userProfile']);
//Route::get('/supplier/{user_id}/', [UserController::class,'approve'])->name('admin.users.approve');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
  Route::get('/approval', [HomeController::class,'approval'])->name('approval');

  Route::middleware(['admin'])->group(function () {
        Route::get('/users', [UserController::class,'index'])->name('admin.users.index');
        Route::get('/admin-users', [UserController::class,'adminUsers'])->name('admin.users.profile');
        Route::get('/users/{user_id}/approve', [UserController::class,'approve'])->name('admin.users.approve');
        Route::get('/users/{user_id}/disapprove', [UserController::class,'disapprove'])->name('admin.users.disapprove');
        Route::get('profiles', ProfileUser::class);

    });

  Route::middleware(['approved'])->group(function () {
    Route::get('/dashboard', function () {
      return view('dashboard');
    })->name('dashboard');
    Route::get('products', Products::class,'render')->middleware('auth:sanctum');
  });
});
/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
return view('dashboard');
})->name('dashboard');
*/

/*Route::get('image/{filename}', [ProductController::class,'showImage'])->name('displayImage');*/
