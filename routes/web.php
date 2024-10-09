    <?php

//     use Illuminate\Support\Facades\Route;
//     use App\Http\Controllers\CartController;
//     use App\Http\Controllers\MenuController;

// Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
// Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
// Route::get('/cart', [CartController::class, 'getCart'])->name('cart.get');
// // routes/web.php



// // Route to display the menu
// Route::post('/menu', [MenuController::class, 'index'])->name('menu.index');

use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

// Home route to display the menu
Route::get('/', [MenuController::class, 'menu'])->name('menu');

// Route to add item to the cart
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

// Route to get the cart details
Route::get('/cart', [CartController::class, 'view'])->name('cart.view');
