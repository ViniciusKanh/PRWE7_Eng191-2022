@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="app-title">
            <h1>
                <i class="fa fa-edit">Alteração da Loja</i>
            </h1>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-search fa-lg"></i></li>
                <li class="breadcrumb-item">Pesquisa</li>
            </ul>
        </div>
        <div class="tile">
            <div class="tile-body">
                <form action="{{url('/Loja/alterar', $registro->id)}}" method="POST">
                    @csrf
                    @include('Loja.__form')
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-lg">Salvar Alteração dos Dados da Loja</button>
                        <a class="btn btn-secondary btn-lg" href="{{url('/Loja/cancelar')}}">Cancelar Alteração do Loja</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection