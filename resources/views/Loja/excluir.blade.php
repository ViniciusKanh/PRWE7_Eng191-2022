@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="app-title">
            <h1>
                <i class="fa fa-edit">Exclusão de Dados da Loja</i>
            </h1>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-search fa-lg"></i></li>
                <li class="breadcrumb-item">Pesquisa</li>
            </ul>
        </div>
        <div class="tile">
            <div class="tile-body">
                <form action="{{url('/Loja/excluir', $registro->id)}}" method="POST">
                    @csrf
                    @include('Loja.__form')
                    <div class="center">
                        <button type="submit" class="btn btn-danger btn-lg">Salvar Exclusão dos Dados da Loja</button>
                        <a class="btn btn-secondary btn-lg" href="{{url('/Loja/cancelar')}}">Cancelar Exclusão da Loja</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection