<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DishesController;
use App\Http\Controllers\FoodTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\SubcategoryController;
use App\Models\Restaurant;

Route::get('/', [LocalizationController::class, "index"]);
Route::get('change/lang', [LocalizationController::class, "lang_change"])->name('LangChange');



Route::get('backend/login', function () {

    return view('backend.auth.login');

});

Route::get('/phpinfo', function() {
    return response()->json([
     'stuff' => phpinfo()
    ]);
 });


Route::get('/', function () {
    return view('welcome');
})->where('reactRoutes', '/about');

Auth::routes();

Route::get('/home', [DashboardController::class, 'index'])->name('home');
Route::get('/backend/dashboard', [DashboardController::class, 'index'])->name('admin_dashboard');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategory', SubcategoryController::class);
    Route::resource('food_type', FoodTypeController::class);
    Route::resource('currency', CurrencyController::class);
    Route::resource('restaurant', RestaurantController::class);
    Route::resource('dishes', DishesController::class);
    Route::resource('menus', MenuController::class);
    Route::get('/userChangeStatus', [App\Http\Controllers\UserController::class,'userChangeStatus'])->name('userChangeStatus');
    Route::get('/changeFeatured', [App\Http\Controllers\MenuController::class,'changeFeatured'])->name('changeFeatured');
    Route::get('/changeDeliverable', [App\Http\Controllers\MenuController::class,'changeDeliverable'])->name('changeDeliverable');
    Route::get('/changeSpecial', [App\Http\Controllers\MenuController::class,'changeSpecial'])->name('changeSpecial');
    Route::get('/changeActive', [App\Http\Controllers\MenuController::class,'changeActive'])->name('changeActive');

});



