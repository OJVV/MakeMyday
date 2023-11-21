<?php

use App\Livewire\Frontend\About;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EllaController;
use App\Http\Controllers\WorkController;
use App\Livewire\Frontend\HomeComponent;
use App\Livewire\Frontend\WorkComponent;
use App\Http\Controllers\DulceController;
use App\Livewire\Frontend\AboutComponent;
use App\Http\Controllers\ArregloController;
use App\Livewire\Frontend\ArreglosFlorales;
use App\Livewire\Frontend\ContactComponent;
use App\Livewire\Frontend\DetallesConDulces;
use App\Livewire\Frontend\DetallesParaEllas;
use App\Livewire\Frontend\DetallesParaEllos;

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
Route::get("/detallesm", DetallesParaEllas::class)->name("detallesm");
Route::get("/detallesh", DetallesParaEllos::class)->name("detallesh");
Route::get("/dulces", DetallesConDulces::class)->name("dulces");
Route::get("/flores", ArreglosFlorales::class)->name("flores");




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [WorkController::class, 'index'])->name('work.index');
    Route::get('/work/create', [WorkController::class, 'create'])->name('work.create');
    Route::get('/work/{work}/edit', [WorkController::class, 'edit'])->name('work.edit');
    Route::get('/ellas', [EllaController::class, 'index'])->name('ellas.index');
    Route::get('/ellas/create', [EllaController::class, 'create'])->name('ellas.create');
    Route::get('/ella/{ella}/edit', [EllaController::class, 'edit'])->name('ella.edit');
    Route::get('/arreglo', [ArregloController::class, 'index'])->name('arreglo.index');
    Route::get('/arreglo/create', [ArregloController::class, 'create'])->name('arreglo.create');
    Route::get('/arreglo/{arreglo}/edit', [ArregloController::class, 'edit'])->name('arreglo.edit');

    Route::get('/dulce', [DulceController::class, 'index'])->name('dulce.index');
    Route::get('/dulce/create', [DulceController::class, 'create'])->name('dulce.create');
    Route::get('/dulce/{dulce}/edit', [DulceController::class, 'edit'])->name('dulce.edit');
});
