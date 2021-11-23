<?php

use App\Http\Livewire\Grooms;
use App\Http\Livewire\Hotels;
use App\Http\Livewire\Users;
use App\Http\Livewire\Monitorings;
use App\Http\Livewire\Pets;
use App\Http\Livewire\Cages;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\ShowMonitorings;
use App\Http\Livewire\MedicalRecords;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('redirects', 'App\Http\Livewire\Home');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {

    Route::resource('hotels', \App\Http\Controllers\HotelController::class)
    ->only(['create', 'store']);

    Route::get('pets', [\App\Http\Controllers\PetController::class, 'index'])
    ->name('pets.index');

    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/groom', Grooms::class)->name('grooms');
    Route::get('/hotel', Hotels::class)->name('hotels');
    Route::get('/monitoring/{id}', Monitorings::class)->name('monitorings');
    Route::get('/showmonitoring', ShowMonitorings::class)->name('showmonitorings');
    Route::get('/breed', Grooms::class)->name('breeds');
    Route::get('/user', Users::class)->name('users');
    Route::get('/pet', Pets::class)->name('pets');
    Route::get('/cage', Cages::class)->name('cages');
    Route::get('/medical-records', MedicalRecords::class)->name('medicalRecords');



});
