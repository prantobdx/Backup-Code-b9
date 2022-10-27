<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentRegister()
    {
        return view('frontEnd.student.register');
    }
    public function studentLogin()
    {
        return view('frontEnd.student.login');
    }
}
