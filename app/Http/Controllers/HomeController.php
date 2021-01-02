<?php

namespace App\Http\Controllers;
use DB;
use App\Models\User; 
use App\Models\product; 
use App\Models\Category; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    return view('home');
    }
    public function staffHome()
    {
        $users = DB::table('users')->count();
        $products = Product::all();
        return view('staffHome', compact('products'));
    }


}
