<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function test()
    {
        $t = 14/0;
        return response()->json(['hello' => 'Laravel'], 201);
    }
}
