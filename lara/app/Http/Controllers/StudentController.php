<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{

    public function list(Request $request)
    {
        $student = Student::where('id', '>', 2)->paginate(5);
        return response()->json($student, 200);
    }


    public function create(Request $request)
    {
        $student = Student::create($request->all());

        return response()->json($student,201);
    }


     public function item($id)
    {
        $student = Student::findOrFail($id);
        return response()->json($student,200);
    }

    public function update(Request $request, $id)
    {
          $student = Student::findOrFail($id);
          $student -> update($request->all());
          return response()->json($student, 200);
    }


    public function delete($id)
    {
          $student = Student::findOrFail($id);
          $student->delete();
          return response()->json($student, 204);
    }
}
