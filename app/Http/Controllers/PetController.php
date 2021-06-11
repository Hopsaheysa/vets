<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Owner;

class PetController extends Controller
{

    public function index()
    {
        $pets = Pet::orderBy('name')->limit(20)->get();
        
        return view('pets.index', compact("pets"));
    }

    public function create($id)
    {
      $pet = new Pet;
    
      return view('pets.create', compact('pet', 'id'));  
    }

 
    public function store(Request $request)
    {
       
         $this->validate($request, [
            'name' => 'required|min:1',
            'breed' => 'required|min:1',
            'weight' => 'required|min:1',
            'age' => 'required|min:1',
            ]);
        $pet = new Pet;
        $pet->name = $request->input('name');
        $pet->breed = $request->input('breed');
        $pet->weight = $request->input('weight');
        $pet->age = $request->input('age');
        $pet->photo_path = $request->input('photo_path') ?? "";
        $pet->owner_id = $request->input('owner_id');

        $pet->save();

        session()->flash('success_message', 'Pet added! Woof woof');

        return redirect()->action('PetController@find_owners_pets', [$pet->owner_id]);
    }


    public function find_owners_pets($owner_id)
    {
        $pets = Pet::where('owner_id', $owner_id)->get();
        $owner = Owner::find($owner_id);
        return view('owners.owner_pets', compact('pets', 'owner'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
