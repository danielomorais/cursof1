@extends('layout')
@section('conteudo')

<form action="/categorias" method="POST">
    @csrf
    <div class="mb-3">
      <label for="titulo" class="form-label">Título da categoria</label>
      <input type="text" class="form-control" id="titulo" name='titulo'>
    </div>
    <div class="mb3">
        <button class="btn btn-primary">Enviar</button>
    </div>
</form>

@endsection
