<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function create_client()
    {
        return view('create-client');
    }
        public function store_client(Request $request)
    {
        // dd($request->all());
        $Client = new Client;
        $Client->firstname=$request->firstname;
        $Client->lastname=$request->lastname;
        $Client->gender=$request->gender;
        $Client->contact=$request->contact;
        $Client->age=$request->age;
        $Client->Save();
        return redirect()->back()->with('success','Client Added Successfully');
    }
}