@extends('layout')
@section('conteudo')

<div class="card">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">{{ $tituloDaPagina }}</h5>
    </div>
    <div class="card-body">

        @if (count($produtos) > 5)
        <div class="alert alert-danger">Cuidado!!!</div>
        @endif

        <ul class="list-group">
        @foreach ($produtos as $produto)
            <li class="list-group-item">{{ $produto->nome }}</li>
        @endforeach
        </ul>
    </div>
</div>
@endsection
