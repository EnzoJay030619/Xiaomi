<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\product; 
use App\Models\Category; 
use Session;

class welcomeController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('welcome', compact('products'));
    }
}
