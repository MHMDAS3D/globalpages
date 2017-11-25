<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsTicker;
use View ;
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


        $NewsTickers = NewsTicker::all();
        // Sharing is caring
        View::share('NewsTickers', $NewsTickers);
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
}
