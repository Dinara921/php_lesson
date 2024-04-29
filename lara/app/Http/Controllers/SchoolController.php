<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Http\Requests\SchoolRequest;

class SchoolController extends Controller
{
    public function create(SchoolRequest $request)
    {
        // $school = new School();
        // $school->name = $request->name;
        // $school->address =  $request->address;
        // $school->save();
        //$request ->validate(['name' => 'min:3, max:10']);
        $school = School::create($request->all());

        //dd($school);
        return response()->json($school,201);
    }

    public function item($id)
    {
        //dd($id);
        $school = School::findOrFail($id);
        return response()->json($school,200);
    }
    public function list(Request $request)
    {
        $schools = School::where('id', '>', 2)->paginate(5);
        return response()->json($schools, 200);
    }

    public function update(Request $request, $id)
    {
          $school = School::findOrFail($id);
          $school -> update($request->all());
          return response()->json($school, 200);
    }
     public function delete($id)
    {
          $school = School::findOrFail($id);
          $school->delete();
          return response()->json($school, 204);
    }
}
