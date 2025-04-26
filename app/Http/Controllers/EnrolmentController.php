<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Enrolment;
use App\Models\Program;

class EnrolmentController extends Controller
{
    public function create_enrollment()
    {
        $clients = Client::all();
        $programs=Program::all();
        
        return view('create-enrollment',compact('clients','programs'));
    }
        public function store_enrollment(Request $request)
    {

        $Enrolment = new Enrolment;
        $Enrolment->client_id=$request->client;
        $Enrolment->program_id=$request->program;
        $Enrolment->Save();
        return redirect()->back()->with('success','Enrolment Added Successfully');
    }
    public function view_enrollment()
    {
        $enrollments =Enrolment::all();
        foreach($enrollments as $enrollment){
        $enrollment->client = Client::where('id',$enrollment->client_id)->first();
        // dd( $enrollment->client);
        $enrollment->program = Program::where('id',$enrollment->program_id)->first();
        // dd($enrollment->program);
       }
        return view('view-enrollment',compact('enrollments'));
    }
}