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
                <td scope="col">Category ID</td>
                <td scope="col" >Category Nome</td>
                <td scope="col" >Description</td>
                <td scope="col">Preço</td>
                <td scope="col">Stock</td>
                <td></td>
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
            <td><a href="{{ route('product.edit', $product->id)}}">Editar</a></td>
            <td><a href="{{ route('product.destroy', $product->id)}}">Apagar</a></td>

        </tr>
        @endforeach
    </table>
</div>
    <br>
    <a class="btn btn-lg btn-primary me-5" href="{{route('product.create')}}">Criar</a>
   @endsection
