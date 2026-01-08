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
    
    public function destroy(User $user){
      $user->delete();
      return redirect("/users");
    }

    public function edit(User $user) {
        return view("users.edituser", compact("user"));
      }

        public function update(Request $request, User $user) {

      $validated = $request->validate([
        "username" => ["required", "max:255"],
        "full_name" => ["required", "max:255"],
        "role" => ["required", "in:admin,inspector,broker,analyst"],
        "password" => ["required"],
        "active" => ["required", "boolean"]

      ]);

      $user->username = $validated["username"];
      $user->full_name = $validated["full_name"];
      $user->role = $validated["role"];
      $user->password = bcrypt($validated["password"]);
      $user->active = $validated["active"];
      $user->save();
      return redirect("/users");
    }

}
