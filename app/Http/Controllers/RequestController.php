<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use app\Models\Request;

class RequestController extends Controller
{
    public function index() 
    {
        return view('request.mainrequest')->with('title', 'Request Purchase');
    }
}
