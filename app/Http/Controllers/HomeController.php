<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        // return view('home');

        //CÓDIGO EJEMPLO PARA CONSUMIR API-REST
        $usuarios = Http::get('https://jsonplaceholder.typicode.com/users');
        $usuariosArray = $usuarios->json();

        return view('home', compact('usuariosArray'));
    }
}
