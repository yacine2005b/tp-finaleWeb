<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        return view('student.create');
    }


    public function store(Request $request)
    {
 $student = new Student();
 $student->name =request()->get('name');
 $student->parent_id=auth()->id();
 $student->save();
        return redirect()->route('dashboard')->with('success', 'Student added successfully.');
    }





}
