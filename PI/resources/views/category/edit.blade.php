@extends('layouts.app')
@section('content')
<form class="form" action="{{route('category.update', $category->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="container">
        <label for="name" class="form-label">Nome da Categoria:</label>
        <input class="form-control mb-3" type="text" name="name" value="{{$category->name}}">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
</form>
@endsection
