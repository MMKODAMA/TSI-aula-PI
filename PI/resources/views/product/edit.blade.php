@extends('layouts.app')
@section('content')
<div class="container">

    <form action="{{route('product.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label class="form-label" for="name">Nome do Produto:</label>
        <input class="form-control" type="text" name="name" value="{{$product->name}}">
        <label for="description">Descrição:</label>
        <input class="form-control" type="text" name="description" value="{{$product->description}}">
        <label for="price">Preço:</label>
        <input class="form-control" type="number" step="0.1" name="price" value="{{$product->price}}">
        <label for="stock">Estoque:</label>
        <input class="form-control" type="number" name="stock" value="{{$product->stock}}">
        <label for="category_id">Selecione uma categoria:  </label>
        <select class="form-select mb-3" name="category_id">

            @foreach($categories as $category)
            <option value="{{$category->id}}"
                {{$product->category_id == $category->id ? 'selected' : '' }}>
                {{$category->name}}</option>
                @endforeach
            </select>
            <label for="tag_id">Selecione uma tag:</label>
            <select multiple name="tags[]">
            @foreach($tags as $tag)
            <option value="{{$tag->id}}" {{$product->hasTag($tag->id) ? 'selected' : '' }}>{{$tag->name}}</option>
            @endforeach
            </select>
            <br>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
        @endsection
