@extends('layouts.app')

@section('content')
    <div class="container col-md-12">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Cadastro de clientes') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form name="frmClientes" id="frmClientes" action="#" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputEmail4">Nome completo</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">Telefone</label>
                                    <input type="text" class="form-control telefone" id="telefone" name="telefone">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputEmail4">CEP</label>
                                    <input type="text" class="form-control cep" id="cep" name="cep" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">Endereço</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputEmail4">Número</label>
                                    <input type="text" class="form-control" id="numero" name="numero" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">Cidade</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">Estado</label>
                                    <input type="text" class="form-control" id="estado" name="estado" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">País</label>
                                    <input type="text" class="form-control" id="pais" name="pais" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<
@section('control')
    <div class="container col-md-11"><br>
        <div id="list" class="row baseFloatRight">
            <a class="btn btn-primary" href="{{ url('/') }}" role="button"><i class="fas fa-home"></i> Início</a>&nbsp;&nbsp;
            <a class="btn btn-primary" href="{{ url('/') }}" role="button"><i class="fas fa-arrow-left"></i> Voltar</a>
        </div>
    </div><br>
@endsection
    
