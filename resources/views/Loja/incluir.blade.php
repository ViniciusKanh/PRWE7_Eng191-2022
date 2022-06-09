@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="app-title">
            <h1>
                <i class="fa fa-edit">Cadastro da Loja</i>
            </h1>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-search fa-lg"></i></li>
                <li class="breadcrumb-item">Pesquisa</li>
            </ul>
        </div>
        <div class="tile">
            <div class="tile-body">
                <form action="{{url('/Loja/salvar/')}}" method="POST">
                    @csrf
                    @include('Loja.__form')
                    
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-lg">Salvar Dados da Loja</button>
                        <a class="btn btn-secondary btn-lg" href="{{url('/Loja/cancelar')}}">Cancelar Cadastro da Loja</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection