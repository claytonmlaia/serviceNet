@extends('layouts.app')

@section('content')
    <div class="container col-md-12">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Clientes') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <a class="btn btn-success" href="{{ url('/USR') }}" role="button" title="Detalhes do cadastro"><i class="fas fa-plus"></i> Novo</a>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col" class="bg-primary">Nome</th>
                                    <th scope="col" class="bg-primary">Telefone</th>
                                    <th scope="col" class="bg-primary">Endereço</th>
                                    <th scope="col" class="bg-primary">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--@foreach($listaUsuarios as $listaUsuario)--}}
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-success" href="{{ url('/') }}" role="button" title="Detalhes do cadastro"><i class="fas fa-eye"></i></a>
                                        <a class="btn btn-primary" href="{{ url('/') }}" role="button" title="Editar cadastro"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger" href="{{ url('/') }}" role="button" title="Excluír cadastro"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                {{--@endforeach--}}
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
