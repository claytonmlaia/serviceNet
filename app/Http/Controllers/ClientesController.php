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
        flash(__('msgUsuarios.usuario.cadastro.sucesso'))->success();
        return view('clientesForm');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //dd($request);
        $clientes = new Clientes();
        $clientes->name     =  $request->nome;
        $clientes->telefone =  $request->telefone;
        $clientes->cep      =  $request->cep;
        $clientes->endereco =  $request->endereco;
        $clientes->numero   =  $request->numero;
        $clientes->cidade   =  $request->cidade;
        $clientes->estado   =  $request->estado;
        $clientes->pais     =  $request->pais;
        $clientes->save();

        flash(__('Salvo com sucesso!'))->success();
        return redirect(url('/home'));
    }


    public function show(Clientes $clientes)
    {
        //
    }


    public function edit(Clientes $clientes)
    {
        //dd($clientes);
        return view('clientesEditForm', compact('clientes'));
    }


    public function update(Request $request, Clientes $clientes)
    {
         //dd($clientes->id);
        $cliente = Clientes::find($clientes->id);
        $cliente->name     =  $request->nome;
        $cliente->telefone =  $request->telefone;
        $cliente->cep      =  $request->cep;
        $cliente->endereco =  $request->endereco;
        $cliente->numero   =  $request->numero;
        $cliente->cidade   =  $request->cidade;
        $cliente->estado   =  $request->estado;
        $cliente->pais     =  $request->pais;
        $cliente->update();

        flash(__('Atualizado com sucesso!'))->success();
        return redirect(url('/home'));
    }


    public function destroy(Clientes $clientes)
    {
        //dd($clientes->id);
        $cliente = Clientes::find($clientes->id);
        $cliente->delete();

        flash(__('Exluído com sucesso!'))->success();
        return redirect(url('/home'));
    }
}
