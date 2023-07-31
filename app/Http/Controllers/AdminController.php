<?php

namespace App\Http\Controllers;

use App\Models\RequestDemo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function demoIndex()
    {
        $requests = RequestDemo::all();
        return view('backend.demo_requests', compact('requests'));
    }
}
