<?php

namespace App\Http\Controllers;

use App\Models\Cases;

use App\Models\Documents;

use App\Models\Inspections;

use App\Models\Parties;

use App\Models\User;

use App\Models\Vehicles;

use Illuminate\Http\Request;

class crmController extends Controller
{

  

    public function cases()
    {
         $cases = Cases::all();
        return view("cases.cases", compact('cases'));
    }
    

    public function showCases(Cases $case)
    {
        return view("cases.showcases", compact('case'));
    }

    public function vehicles()
    {
         $vehicles = Vehicles::all();
        return view("vehicles.vehicles", compact('vehicles'));
    }
    

    public function showVehicles(Vehicles $vehicle)
    {
        return view("vehicles.showvehicles", compact('vehicle'));
    }

    public function documents()
    {
         $documents = Documents::all();
        return view("documents.documents", compact('documents'));
    }
    

    public function showDocuments(Documents $document)
    {
        return view("documents.showdocuments", compact('document'));
    }

    public function parties()
    {
         $parties = Parties::all();
        return view("parties.parties", compact('parties'));
    }
    

    public function showParties(Parties $part)
    {
        return view("parties.showparties", compact('part'));
    }

    public function users()
    {
         $users = User::all();
        return view("users.users", compact('users'));
    }
    

    public function showUsers(User $user)
    {
        return view("users.showusers", compact('user'));
    }

  public function createUser () {
        return view('users.createuser');
    }

    public function store(Request $request) {
        
        $validated = $request->validate([
            "user_id" => ["required", "max:255"],
            "username" => ["required", "max:255"],
            "full_name" => ["required", "max:255"],
            "password" => ["required", "max:255"],
            "role" => ["required", "max:255"],
            "active" => ["required", "max:1"]

          ]);
        
        User::create([
            "user_id" => $request->user_id,
            "username" => $request->username,
            "password" => bcrypt($request->password),
            "full_name" => $request->full_name,
            "role" => $request->role,
            "active" => $request->active
          ]);
        
        return redirect("/users");
    }

   
    
}
