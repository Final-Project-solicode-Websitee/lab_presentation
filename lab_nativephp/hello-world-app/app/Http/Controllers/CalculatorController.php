<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function calculate(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $result = $a + $b;

        return view('welcome', compact('a', 'b', 'result'));
    }
}