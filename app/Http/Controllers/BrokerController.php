<?php

namespace App\Http\Controllers;

use App\Models\Documents;

use Illuminate\Http\Request;

class BrokerController extends Controller
{
    public function index()
    {
        return view("broker");
    }
}
