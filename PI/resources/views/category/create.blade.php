@extends('layouts.app')
@section('content')

<form action="{{route('category.store')}}" method="POST">
    @csrf
    <div class="container">
        <label for="name" class="form-label">Nome da Categoria:</label>
        <input class="form-control mb-3" type="text" name="name">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
</form>
@endsection
