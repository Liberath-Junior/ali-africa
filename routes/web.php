<?php
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Customer Routes
|--------------------------------------------------------------------------
*/
Route::get('/product/{product}', [ProductController::class, 'show'])
    ->name('product.show');
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/category/{category}', [HomeController::class, 'category'])
    ->name('category');

Route::get('/cart', [CartController::class, 'index'])
    ->name('cart.index');

Route::post('/cart/add/{product}', [CartController::class, 'add'])
    ->name('cart.add');

Route::post('/cart/{item}/increase', [CartController::class, 'increase'])
    ->name('cart.increase');

Route::post('/cart/{item}/decrease', [CartController::class, 'decrease'])
    ->name('cart.decrease');

Route::delete('/cart/{item}', [CartController::class, 'remove'])
    ->name('cart.remove');

Route::get('/checkout', [OrderController::class, 'checkout'])
    ->name('checkout');

Route::post('/checkout', [OrderController::class, 'placeOrder'])
    ->name('checkout.place');

Route::get('/order/{order}/success', [OrderController::class, 'success'])
    ->name('order.success');


/*
|--------------------------------------------------------------------------
| Admin Authentication
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('admin.login.submit');

Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->name('admin.logout');


/*
|--------------------------------------------------------------------------
| Protected Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->middleware('admin.auth')
    ->group(function () {
        Route::get('/products/{product}/edit', [AdminProductController::class, 'edit'])
            ->name('products.edit');
        Route::put('/products/{product}', [AdminProductController::class, 'update'])
            ->name('products.update');
        Route::patch('/products/{product}/toggle-active', [AdminProductController::class, 'toggleActive'])
            ->name('products.toggle-active');

        Route::post('/products', [AdminProductController::class, 'store'])
            ->name('products.store');

        Route::get('/products', [AdminProductController::class, 'index'])
            ->name('products.index');
        Route::get('/products/create', [AdminProductController::class, 'create'])
            ->name('products.create');
        Route::get('/orders', [AdminOrderController::class, 'index'])
            ->name('orders.index');

        Route::get('/orders/{order}', [AdminOrderController::class, 'show'])
            ->name('orders.show');

        Route::post('/orders/{order}/confirm', [AdminOrderController::class, 'confirm'])
            ->name('orders.confirm');

        Route::post('/orders/{order}/cancel', [AdminOrderController::class, 'cancel'])
            ->name('orders.cancel');

        Route::post('/orders/{order}/out-for-delivery', [AdminOrderController::class, 'outForDelivery'])
            ->name('orders.out-for-delivery');

        Route::post('/orders/{order}/delivered', [AdminOrderController::class, 'delivered'])
            ->name('orders.delivered');
    });
