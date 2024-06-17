<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('students.index');
});


Route::resource('students', StudentController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/student', [ StudentController::class, 'edit'])->name('student.edit');
    Route::patch('/student', [ StudentController::class, 'update'])->name('student.update');
    Route::delete('/student', [StudentController::class, 'destroy'])->name('student.destroy');
});
