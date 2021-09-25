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

                            <a class="btn btn-success" href="{{ url('/CET') }}" role="button" title="Detalhes do cadastro"><i class="fas fa-plus"></i> Novo</a>
                            <form class="" name="frmClientes" id="frmClientes" action="#" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{ method_field('POST') }}

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
                                @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->name }}</td>
                                    <td>{{ $cliente->telefone }}</td>
                                    <td>{{ $cliente->endereco }} -
                                        Nº {{ $cliente->numero }} -
                                        {{ $cliente->cidade }} /
                                        {{ $cliente->estado }} -
                                        {{ $cliente->pais }} -
                                        CEP: {{ $cliente->cep }}
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="" role="button" title="Detalhes do cadastro"><i class="fas fa-eye"></i></a>
                                        <a class="btn btn-primary" href="{{ url('/CET/EDT') }}/{{ $cliente->id }}" role="button" title="Editar cadastro"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger" href="" onclick="aoClicarExcluir({{ $cliente->id }})" role="button" title="Excluír cadastro"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    function aoClicarExcluir(cliente){
        event.preventDefault();
        let frm = document.getElementById('frmClientes');
        let txtMetodo = document.getElementsByName('_method');
        if(cliente) {
            result = window.confirm('{{ __('Tem certeza que quer excluir o cliente?') }}');
            if (result) {
                txtMetodo[0].value = 'DELETE';
                frm.action = "{{ url('/CET') }}/"+cliente;
                frm.submit();
            }
        }
    }
</script>
