<?php

namespace App\Http\Controllers;

use App\Tablo;
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
    public function dash()
    {

        $items= Tablo::all()->where('vaz','=',0)->sortByDesc('id');




        return view('admin.dashboard',['items'=>$items]);

    }
}
