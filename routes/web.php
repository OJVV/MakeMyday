<?php

use App\Livewire\Frontend\About;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Livewire\Frontend\HomeComponent;
use App\Livewire\Frontend\WorkComponent;
use App\Livewire\Frontend\AboutComponent;
use App\Livewire\Frontend\ContactComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/", HomeComponent::class)->name("home");
Route::get("/about", AboutComponent::class)->name("about");
Route::get("/work", WorkComponent::class)->name("work");
Route::get("/contact", ContactComponent::class)->name("contact");




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [WorkController::class, 'index'])->name('work.index');
    Route::get('/work/create', [WorkController::class, 'create'])->name('work.create');
    Route::get('/work/{work}/edit', [WorkController::class, 'edit'])->name('work.edit');
});
