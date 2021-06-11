<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::orderBy('surname')->get();
        return view('owners.index', compact("owners"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_search_form()
    {
        return view('owners.search_form');
    }

    public function search_owner(Request $request)
    {
        $results = Owner::where('surname', 'like', '%' . $request->input('surname') . '%' )->orderBy('surname', 'asc')->get();
        return view('owners.search_owner', compact('results'));
    }

    public function create()
    {
       
      $owner = new Owner;
      return view('owners.create', compact('owner'));  
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|min:1',
            'surname' => 'required|min:1',
            'home_address' => 'required|min:1',
            'email' => 'required|min:1',
            'phone' => 'required|min:1',
            ]);
        $owner = new Owner;
        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->home_address = $request->input('home_address');
        $owner->email = $request->input('email');
        $owner->phone = $request->input('phone');

        $owner->save();

        session()->flash('success_message', 'Owner saved! Woof woof');

        return redirect()->action('PetController@find_owners_pets', [$owner->id]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $owner = Owner::findOrFail($id);

        return view('owners.edit', compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $owner = Owner::findOrFail($id);
        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->home_address = $request->input('home_address');
        $owner->email = $request->input('email');
        $owner->phone = $request->input('phone');

        $owner->save();

        session()->flash('success_message', 'Owner saved! Woof woof');

        return redirect()->action('PetController@find_owners_pets', [$owner->id]);


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
