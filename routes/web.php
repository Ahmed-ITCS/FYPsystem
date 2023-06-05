<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Advisor;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Student;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->middleware('role:admin')->name('dashboard');
//admin students
Route::get('/addstudent', [Student::class , 'create'])->middleware(['auth', 'verified'])->middleware('role:admin')->name('dashboard');
Route::post('/addstudentsave', [Student::class , 'store'])->middleware(['auth', 'verified'])->middleware('role:admin')->name('dashboard');
Route::get('/deletestudent/{user}', [Student::class , 'destroy'])->middleware(['auth', 'verified'])->middleware('role:admin')->name('dashboard');
//admin advisor
Route::get('/addadvisor', [Advisor::class , 'create'])->middleware(['auth', 'verified'])->middleware('role:admin')->name('dashboard');
Route::post('/addadvisorsave', [Advisor::class , 'store'])->middleware(['auth', 'verified'])->middleware('role:admin')->name('dashboard');
Route::get('/deleteadvisor/{user}', [Advisor::class , 'destroy'])->middleware(['auth', 'verified'])->middleware('role:admin')->name('dashboard');

//admin projects
Route::get('Projects', [ProjectController::class , 'index'])->middleware(['auth', 'verified'])->middleware('role:admin')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
/*
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
    // Dashboard accessible only to admin users
})->middleware('role:admin');
*/

require __DIR__.'/auth.php';
