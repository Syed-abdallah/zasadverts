<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ReguserController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\SpotlightController;
use App\Http\Controllers\FrontPortfolioController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\TestinomialImageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\FrontendController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [FrontendController::class, 'welcome']);

Route::middleware(['auth'])->group(function () {
   Route::resource('permissions', PermissionController::class);
       Route::resource('roles', RoleController::class); 
       
    Route::get('/userregister', [ReguserController::class, 'index'])->name('newuser.register');
 
    Route::post('/registers', [ReguserController::class, 'registeruser'])->name('register.user');
    Route::post('/submit-form', [ContactusController::class, 'store'])->name('form.store');

});
Route::middleware(['auth'])->prefix('/mainpage')->group(function () {

    Route::resource('spotlight', SpotlightController::class);
Route::resource('frontportfolio', FrontPortfolioController::class);
Route::resource('productimages', ProductImageController::class);
Route::resource('testinomialimages', TestinomialImageController::class);
    
Route::resource('videos', VideoController::class);
    

    


    
       Route::resource('faqs', FaqController::class);
    

Route::put('roles/{role}', [RoleController::class, 'update'])->name('roles.update');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
