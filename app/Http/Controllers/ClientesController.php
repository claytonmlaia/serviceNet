<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Clientes::get();

        return view('cliantesLista', compact('clientes'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Clientes $clientes)
    {
        //
    }


    public function edit(Clientes $clientes)
    {
        //
    }


    public function update(Request $request, Clientes $clientes)
    {
        //
    }


    public function destroy(Clientes $clientes)
    {
        //
    }
}
