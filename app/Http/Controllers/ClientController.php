<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Enrolment;
use App\Models\Program;

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
    

    public function filter_clients()
    {
        return view('filter-clients');
    }
    public function search(Request $request)
    {
        $client ='';
        $enrollments='';
        if($request->search =='firstname'){
            $client =Client::where('firstname','like',"%$request->criteria%")->first();
            if($client !=null){
                $enrollments = Enrolment::where('client_id',$client->id)->get();
            }
        }elseif($request->search =='lastname'){
            $client =Client::where('lastname','like',"%$request->criteria%")->first();
             if($client !=null){
                $enrollments = Enrolment::where('client_id',$client->id)->get();
             }
        }elseif($request->search =='contact'){
            $client =Client::where('contact','like',"%$request->criteria%")->first();
             if($client !=null){
                $enrollments = Enrolment::where('client_id',$client->id)->get();
             }
        }else{
             $enrollments ='';
        }
         if($client !=null){
        foreach($enrollments as $enrollment){
        $enrollment->client = Client::where('id',$enrollment->client_id)->first();
        $enrollment->program = Program::where('id',$enrollment->program_id)->first();
       }     
         }
        return view('search-clients',compact('enrollments'));
    }
    public function view_profile($id)
    {
        $enrollments =Enrolment::where('client_id', $id)->get();
         $profile =Client::where('id', $id)->first();
        foreach($enrollments as $enrollment){
        $enrollment->client = Client::where('id',$enrollment->client_id)->first();
        $enrollment->program = Program::where('id',$enrollment->program_id)->first();
       }
        return view('view-profile',compact('enrollments','profile'));
    }

}