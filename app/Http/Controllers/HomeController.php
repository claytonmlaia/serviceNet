<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $clientes = Clientes::get();
        //dd($clientes);
        return view('cliantesLista', compact('clientes'));
    }
}
