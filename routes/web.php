<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;

<<<<<<< HEAD
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
=======

Route::get("/",[PublicController::class,"index"])->name("homepage");
Route::get("/products/{p_id}",[PublicController::class,"viewProduct"])->name("viewproduct");
Route::get("/cart",[PublicController::class,"cart"])->name("cart");
Route::get("/checkout",[PublicController::class,"checkOut"])->name("checkout");

//----------------auth------Route

>>>>>>> e4a8f6efdc602f3f196cfdc25a1bf4fe6af1d277
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
