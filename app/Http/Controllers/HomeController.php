<?php

namespace App\Http\Controllers;

use App\UsuarioPrivilegio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
      $dato = UsuarioPrivilegio::_getP(Auth::user()->id)->get()->pluck('idPrivilegio')->toArray();
      return view('home',compact('dato'));
    }
}
