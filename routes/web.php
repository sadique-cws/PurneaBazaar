<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;

Route::get("/",[PublicController::class,"index"])->name("homepage");
Route::get("/product/{p_id}",[PublicController::class,"viewProduct"])->name("viewProduct");
Route::get("/cart",[PublicController::class,"cart"])->name("cart");
Route::get("/checkout",[PublicController::class,"checkout"])->name("checkout");


// admin Routes
Route::prefix("admin")->group(function(){
    Route::get("/",[AdminController::class,"dashboard"])->name("admin.home");
    Route::resources([
        "category" => App\Http\Controllers\CategoryController::class,
        "product" => App\Http\Controllers\ProductController::class,
        "brand" => App\Http\Controllers\BrandController::class,
        "coupon" => App\Http\Controllers\CouponController::class,
        "order" => App\Http\Controllers\OrderController::class,
        "payment" => App\Http\Controllers\PaymentController::class,
        "address" => App\Http\Controllers\AddressController::class,
        "user" => App\Http\Controllers\UserController::class,
    ]);
});

//------------------------------------- AUTH Route--------------------------------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
