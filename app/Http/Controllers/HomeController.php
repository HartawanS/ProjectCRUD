<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function error($id)
    {
        switch ($err='503') {
            case '503':
                return view('error.error-forbidden');
                break;
            
            default:
                return view('error.error-forbidden');
                break;
        }
    }
}
