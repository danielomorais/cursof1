@extends('layout')
@section('conteudo')

<div class="card">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">{{ $tituloDaPagina }}</h5>
    </div>
    <div class="card-body">

        @if (count($categorias) > 5)
        <div class="alert alert-danger">Cuidado!!!</div>
        @endif

        <ul class="list-group">
        @foreach ($categorias as $categoria)
            <li class="list-group-item">{{ $categoria }}</li>
        @endforeach
        </ul>
    </div>
</div>
@endsection

