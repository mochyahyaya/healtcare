<?php

use App\Http\Livewire\Admin\Breedings;
use App\Http\Livewire\Admin\Grooms;
use App\Http\Livewire\Admin\Hotels;
use App\Http\Livewire\Admin\Users;
use App\Http\Livewire\Admin\Monitorings;
use App\Http\Livewire\Admin\Pets;
use App\Http\Livewire\Admin\Cages;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Inpatients;
use App\Http\Livewire\Admin\ShowMonitorings;
use App\Http\Livewire\Admin\MedicalRecords;
use App\Http\Livewire\Admin\ShowMonitoringBreedings;
use App\Http\Livewire\Admin\BreedingMonitorings;
use App\Http\Livewire\User\DashboardU;
use App\Http\Livewire\User\UserBoarding;
use App\Http\Livewire\User\UserGrooming;
use App\Http\Livewire\Veterinarian\DashboardD;
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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('redirects', 'App\Http\Livewire\Admin\Home');

Route::group(['middleware' => 'web'], function () {

    Route::get('/', function () {
        return view('auth.login');
    });

    Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {

        Route::resource('hotels', \App\Http\Controllers\HotelController::class)
        ->only(['create', 'store']);
    
        Route::get('pets', [\App\Http\Controllers\PetController::class, 'index'])
        ->name('pets.index');
    
        Route::get('admin/dashboard', Dashboard::class)->name('admin/dashboard');
        Route::get('veterinarian/dashboard', DashboardD::class)->name('veterinarian/dashboard');
        Route::get('user/dashboard', DashboardU::class)->name('user/dashboard');
        Route::get('admin/groom', Grooms::class)->name('admin/grooms');
        Route::get('admin/hotel', Hotels::class)->name('admin/hotels');
        Route::get('admin/monitoring/{id}', Monitorings::class)->name('monitorings');
        Route::get('admin/showmonitoring', ShowMonitorings::class)->name('admin/showmonitorings');
        Route::get('admin/breed', Breedings::class)->name('admin/breeds');
        Route::get('admin/breedingmonitoring/{id}', BreedingMonitorings::class)->name('admin/breedingmonitorings');
        Route::get('admin/showmonitoringbreeding', ShowMonitoringBreedings::class)->name('admin/showmonitoringbreedings');
        Route::get('admin/user', Users::class)->name('admin/users');
        Route::get('admin/pet', Pets::class)->name('admin/pets');
        Route::get('admin/cage', Cages::class)->name('admin/cages');
        Route::get('admin/medical-records', MedicalRecords::class)->name('admin/medicalRecords');
        Route::get('admin/inpatients', Inpatients::class)->name('admin/inpatients');

        Route::get('user/grooming', UserGrooming::class)->name('user/groomings');
        Route::get('user/hotel', UserBoarding::class)->name('user/hotels');
                
    
    });
});

