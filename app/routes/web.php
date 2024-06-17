<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'loadCities'])->name('home');
Route::get('/contact')->name('contact');
Route::view('/admin/add-city','add-city',['title'=>'Add new city'])->middleware('auth')->name('city.new');
Route::post('/admin/add-city',[CityController::class,'addCity'])->name('city.add');
Route::get('/admin/edit',[CityController::class,'editLoader'])->middleware('auth')->name('edit');


Route::get('/admin/edit/city/{city}',[CityController::class,'updateCity'])->middleware('auth')->name('edit.update');
Route::get('/admin/edit/delete/{city}',[CityController::class,'deleteCity'])->middleware('auth')->name('edit.delete');
Route::post('/admin/edit/city/save/{city}',[CityController::class,'saveUpdate'])->name('city.save');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
