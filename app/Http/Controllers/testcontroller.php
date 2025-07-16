<?php

namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Http\Request;

class testcontroller extends Controller
{
    public function index()
    {
        
        $tests = test::get();
        
        
        // dd($services);
        return view('welcome',compact('test'));
    }
}
