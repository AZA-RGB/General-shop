<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\unitController;
use App\Http\Controllers\DataImportController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use App\Models\Tag;
use App\Models\Role;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
// Route::get('role-test', function () {
//     $role=Role::find(2);
//     return $role->users;
// });
Route::get('test',function(){
    return 'hello';
})->middleware(['auth','user_is_support']);


// Route::get('units-import',[DataImportController::class,'importUnits'] );

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth',])->group(function () {
    //units
    Route::get('units',[unitController::class,'index'] )->name('units');
    //categories
    Route::get('categories',[CategoryController::class,'index'] )->name('categories');
    //products
    Route::get('products',[ProductController::class,'index'] )->name('products');
    //Tags
    Route::get('tags',[TagController::class,'index'] )->name('tags');
    //Countries
    Route::get('countries',[CountryController::class,'index'] )->name('countries');
    //state
    Route::get('states',[StateController::class,'index'] )->name('states');
    //reviews
    Route::get('reviews',[ReviewController::class,'index'] )->name('reviews');
      //support
      Route::get('support',[SupportController::class,'index'] )->name('supports');
        //roles
        Route::get('roles',[RoleController::class,'index'] )->name('roles');

});


