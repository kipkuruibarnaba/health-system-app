<?php

namespace App\Http\Controllers;
use App\Models\Program;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
      public function create_program()
    {
        return view('create-program');
    }
    public function store_program(Request $request)
    {
        $Program = new Program;
        $Program->name=$request->name;
        $Program->Save();
        // return response()->json([
        //     'status'=>200,
        //     'message'=>'Program Added Successfully'
        // ]);

        return redirect()->back()->with('success','Program Added Successfully');
    }
}