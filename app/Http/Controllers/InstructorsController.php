<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Drivers;

class InstructorsController extends Controller
{

    public function addInstructor(Request $request){
        if(Drivers::where('first_name', $request->input('first_name'))->where('last_name', $request->input('last_name'))->count() > 0){
            return 'Already exists';
        }else{
            Drivers::create([
                'last_name' => $request->input('last_name'),
                'first_name' => $request->input('first_name'),
            ]);
            return "Created";
        }
    }

    public function getInstructorList(){
        return Drivers::all();
    }

}