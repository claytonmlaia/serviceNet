@extends('layouts.app')

@section('content')
<div class="container col-md-12">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">{{ __('Bem vindo') }} {{ auth()->user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Sucesso ao logar') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
