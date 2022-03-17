<div>
    {{ session()->get('success')}}
</div>
@extends('layouts.app')
@section('content')

<div class="container">
    <table class="table table-secondary table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Category ID</td>
                <td>Category Nome</td>
                <td>Description</td>
                <td>Preço</td>
                <td>Stock</td>
                <td></td>
            </tr>
        </thead>

    @foreach($products as $product)

        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->Category->id}}</td>
            <td>{{$product->Category->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->stock}}</td>
            <td><a href="{{ route('product.restore', $product->id)}}">Restaurar</a></td>
        </tr>
    @endforeach
    </table>
</div>
<br>
<a class="btn btn-lg btn-primary me-5" href="{{route('product.index')}}">Voltar</a>
@endsection
