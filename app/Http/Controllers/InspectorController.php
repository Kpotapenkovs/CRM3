<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cases;

use App\Models\Inspections;

class InspectorController extends Controller
{
    public function index()
    {
         $inspections = Inspections::all();
        return view("inspection.inspector", compact('inspections'));
    }

    public function showInspections(Inspections $inspection)
    {
        return view("inspection.inspections", compact('inspection'));
    }
}
