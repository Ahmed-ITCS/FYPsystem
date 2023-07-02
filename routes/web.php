<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Advisor;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Student;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\ProjectApplicationController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ProjectPhaseDataController;
use App\Http\Controllers\ProjectPhaseController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DeadlinesController;
use App\Http\Controllers\Phase1Controller;
use App\Http\Controllers\Phase2Controller;
use App\Http\Controllers\Phase3Controller;
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
Route::get('/dashboardd', [StudentDashboardController::class, 'index'])->middleware(['auth', 'verified'])->middleware('role:student')->name('student.dashboard');

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
//admin complaints
//Route::get('/complaint', [ComplaintController::class , 'create'])->middleware(['auth', 'verified'])->middleware('role:admin')->name('dashboard');
//Route::get('/Complains', [ComplaintController::class , 'index'])->middleware(['auth', 'verified'])->middleware('role:admin')->name('dashboard');
//Route::get('/Complains', [ComplaintController::class , 'index'])->middleware(['auth', 'verified'])->middleware('role:admin')->name('dashboard');
//Route::get('/GiveFeedback', [FeedbackController::class , 'store'])->middleware(['auth', 'verified'])->middleware('role:admin')->name('dashboard');

//admin projects
Route::get('/Projects', [ProjectController::class , 'index'])->middleware(['auth', 'verified'])->middleware('role:admin');
Route::get('/deleteprojectt/{id}', [ProjectController::class , 'destroy'])->middleware(['auth', 'verified'])->middleware('role:admin');


//admin proposals  
Route::get('/Proposals', [ProjectApplicationController::class , 'index'])->middleware(['auth', 'verified'])->middleware('role:admin');
Route::get('/approveproject/{id}', [ProjectApplicationController::class , 'approve'])->middleware(['auth', 'verified'])->middleware('role:admin');
Route::get('/deleteproject/{id}', [ProjectApplicationController::class , 'destroy'])->middleware(['auth', 'verified'])->middleware('role:admin');
//admin phases
Route::get('phase1' , [DeadlinesController::class,'create1'])->middleware(['auth', 'verified'])->middleware('role:admin');
Route::get('/phase2' , [DeadlinesController::class,'create2'])->middleware(['auth', 'verified'])->middleware('role:admin');
Route::get('/phase3' , [DeadlinesController::class,'create3'])->middleware(['auth', 'verified'])->middleware('role:admin');
Route::post('/phase1dead', [DeadlinesController::class,'store1'])->middleware(['auth', 'verified'])->middleware('role:admin');
Route::post('/phase2dead', [DeadlinesController::class,'store2'])->middleware(['auth', 'verified'])->middleware('role:admin');
Route::post('/phase3dead', [DeadlinesController::class,'store3'])->middleware(['auth', 'verified'])->middleware('role:admin');
//admin grading
Route::post('/givemarks1', [Phase1Controller::class,'update'])->middleware(['auth', 'verified'])->middleware('role:admin');
Route::post('/givemarks2', [Phase2Controller::class,'update'])->middleware(['auth', 'verified'])->middleware('role:admin');
Route::post('/givemarks3', [Phase3Controller::class,'update'])->middleware(['auth', 'verified'])->middleware('role:admin');



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

/* Student Module Start */

Route::get('/dashboard-student', [StudentDashboardController::class, 'index'])->middleware(['auth', 'verified'])->middleware('role:student')->name('student.dashboard');

Route::get('/projects/apply', [ProjectApplicationController::class, 'create'])->middleware(['auth', 'verified'])->middleware('role:student')->name('student.project.application.create');
Route::post('/projects/apply', [ProjectApplicationController::class, 'store'])->middleware(['auth', 'verified'])->middleware('role:student')->name('student.project.application.store');

Route::get('/feedback/status', [ProjectApplicationController::class, 'index'])->middleware(['auth', 'verified'])->middleware('role:student')->name('student.feedback.status');

Route::get('/complaints/create', [ComplaintController::class, 'create'])->middleware(['auth', 'verified'])->middleware('role:student')->name('student.complaint.submit');
Route::post('/complaints', [ComplaintController::class, 'store'])->middleware(['auth', 'verified'])->name('student.complaints.store');

Route::get('/projects/upload/{project}', [ProjectPhaseController::class, 'create'])->middleware(['auth', 'verified'])->middleware('role:student')->name('student.project.upload');
Route::post('/projects/upload/{project}', [ProjectPhaseDataController::class, 'store'])->middleware(['auth', 'verified'])->middleware('role:student')->name('student.project.upload.store');
//student phases
Route::get('/studentphase1',[Phase1Controller::class,'create'])->middleware(['auth', 'verified'])->middleware('role:student');
Route::get('/studentphase2',[Phase2Controller::class,'create'])->middleware(['auth', 'verified'])->middleware('role:student');
Route::get('/studentphase3',[Phase3Controller::class,'create'])->middleware(['auth', 'verified'])->middleware('role:student');
Route::post('/phase1save',[Phase1Controller::class,'store'])->middleware(['auth', 'verified'])->middleware('role:student');
Route::post('/phase2save',[Phase2Controller::class,'store'])->middleware(['auth', 'verified'])->middleware('role:student');
Route::post('/phase3save',[Phase3Controller::class,'store'])->middleware(['auth', 'verified'])->middleware('role:student');
/* Student Module End */

/* Advisor routes */

Route::get('/dashboard-advisor', function () {
    return view('advisor/dashboard');
})->middleware(['auth', 'verified'])->middleware('role:advisor')->name('dashboard');

Route::get('/projects-advisor', [ProjectController::class , 'advisorIndex'])->middleware(['auth', 'verified'])->middleware('role:advisor');
Route::get('/complaints-advisor', [ComplaintController::class , 'advisorIndex'])->middleware(['auth', 'verified'])->middleware('role:advisor');



require __DIR__.'/auth.php';
