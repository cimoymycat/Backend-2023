<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
   public function index() {
      $students = Student::all();
 
      $data = [
         "message" => "Get all resource",
         "data" => $students,
      ];

      return response()->json($data, 200);
   }
}
