<div>
    {{ session()->get('success')}}
</div>
@extends('layouts.app')
@section('content')
<div class="container">
<table class="table table-secondary table-striped">
    <thead>
        <tr>
            <td scope="col">ID</td>
            <td scope="col">Nome</td>
            <td scope="col">Numero de Produtos</td>
            <td></td>
            <td></td>
        </tr>
    </thead>
    @foreach($tags as $tag)

    <tr>
        <td>{{$tag->id}}</td>
        <td>{{$tag->name}}</td>
        <td>{{$tag->Products->count()}}</td>
        <td><a href="{{ route('tag.edit', $tag->id)}}">Editar</a></td>
        <td><a href="{{ route('tag.destroy', $tag->id)}}">Apagar</a></td>

    </tr>
    @endforeach
</table>
</div>
<br>
<a class="btn btn-lg btn-primary me-5" href="{{route('tag.create')}}">Criar</a>
   @endsection
