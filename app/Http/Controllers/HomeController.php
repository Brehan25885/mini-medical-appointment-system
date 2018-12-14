<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department\Department;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments= Department::all();
        return view('frontend.home.home',compact('departments'));
    }
}
