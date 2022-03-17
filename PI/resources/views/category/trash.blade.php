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
                <td></td>
            </tr>
        </thead>

        @foreach($categories as $category)

        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td><a href="{{ route('category.restore', $category->id)}}">Restaurar</a></td>
        </tr>
        @endforeach
    </table>
</div>
    <br>
<a class="btn btn-lg btn-primary me-5" href="{{route('category.index')}}">Voltar</a>
@endsection
