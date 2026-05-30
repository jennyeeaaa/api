
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;

// REDIRECT TO API
Route::get('/', function () {
    return redirect('/api/students');
});

// VIEW ALL STUDENTS
Route::get('/students-view', function () {

    $students = Student::all();

    return view('students.index', compact('students'));
});

// VIEW SINGLE STUDENT
Route::get('/students-view/{id}', function ($id) {

    $student = Student::find($id);

    return view('students.show', compact('student'));
});

