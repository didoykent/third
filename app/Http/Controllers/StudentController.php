<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
class StudentController extends Controller
{


    public function index(Request $request){




      return response()->json(Student::orderBy('id', 'asc')->get());
    }
}
