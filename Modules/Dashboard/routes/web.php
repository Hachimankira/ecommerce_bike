<?php

use Illuminate\Support\Facades\Route;
use Modules\Dashboard\Http\Controllers\DashboardController;

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

Route::group([], function () {
    Route::resource('admin_dashboard', DashboardController::class)->names('admin.dashboard')
    ->middleware(['auth', 'admin']);
});
Route::post('/product/{id}/status/{status}', [DashboardController::class, 'changeStatus'])->name('product.status');
Route::post('/product/{id}/rating/{rating}', [DashboardController::class, 'changeRating'])->name('product.rating');
Route::get('/dashboard/customer-list', [DashboardController::class, 'customerList'])->name('dasboard.customer');
Route::get('/dashboard/order-list', [DashboardController::class, 'orderList'])->name('dasboard.order');
Route::post('/dashboard/{id}/status/{status}/{product_id}', [DashboardController::class, 'orderStatus'])->name('order.status');
Route::get('/dashboard/billinginfo', [DashboardController::class, 'billingInfo'])->name('dasboard.billing');

// Route::get('dashboard/table', [DashboardController::class, 'table']);
// Route::get('dashboard/pendings-product', [DashboardController::class,'pendingsRequest']);
// Route::get('dashboard/approved-request', [DashboardController::class,'approvedRequest']);
