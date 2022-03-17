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
            <td scope="col">qtd</td>
            <td></td>
            <td></td>
        </tr>
    </thead>
    @foreach($categories as $category)

    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->Products->count()}}</td>
        <td><a href="{{ route('category.edit', $category->id)}}">Editar</a></td>
        <td><a href="{{ route('category.destroy', $category->id)}}">Apagar</a></td>

    </tr>
    @endforeach
</table>
</div>
<br>
<a class="btn btn-lg btn-primary me-5" href="{{route('category.create')}}">Criar</a>
   @endsection
