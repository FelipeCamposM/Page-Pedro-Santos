<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchedulingController extends Controller
{
    
    public function index(){
        return view('schedule/schedulingIndex');
    }

    // public function create(){
    //     return view('scheduling.create');
    // }

}
