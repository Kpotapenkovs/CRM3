<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cases;

class InspectorController extends Controller
{
    public function index()
    {
         $cases = Cases::all();
        return view("inspector", compact('cases'));
    }

        public function showcases(Cases $case)
    {
        return view("cases", compact('case'));
    }
}
