<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(){
        return view('pages.customer.address');
    }

    public function store(Request $request){
        $request->validate([
            'first_name' => ['required','string','max:255'],
            'last_name' => ['required','string','max:255'],
            'phone_number' => ['required','string','max:255'],
            'city' => ['required','string','max:255'],
            'country' => ['required','string','max:255'],
            'region' => ['required','string','max:255'],
            'building_number' => ['required','string','max:255'],
            'floor_number' => ['required','string','max:255'],
            'apartment_number' => ['required','string','max:255'],
            'address_line_1' => ['required','string','max:1000'],

        ]);

        
        auth()->user()->address()->updateOrCreate(
            ['id' => auth()->user()->address->id ?? false],
            $request->all()
        );

        return to_route('address.index')->with('status','Address Added Successfully');
    }
}
