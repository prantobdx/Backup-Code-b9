<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('admin.teacher.add-teacher');
    }

    public function createTeacher(Request $request)
    {
        return $request->file('image');
    }
}
