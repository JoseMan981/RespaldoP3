<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlleruser extends Controller
{
    public function FunctionName(Request $request)
    {
        //return response($request)->json();
    }
    public function test1(Request $var = null)
    {
        return response()->json($data, 200, $headers);
    }
}
