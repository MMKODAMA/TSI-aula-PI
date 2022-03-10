<div>
    {{ session()->get('success')}}
</div>

<table border="1">

    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Category ID</td>
        <td>Category Nome</td>
        <td>Description</td>
        <td>Preço</td>
        <td>Stock</td>
    </tr>

    @foreach($products as $product)


    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->Category->id}}</td>
        <td>{{$product->Category->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->stock}}</td>
        <td><a href="{{ route('product.edit', $product->id)}}">Restaurar</a></td>

    </tr>
    @endforeach
</table>
<br>
<a href="http://127.0.0.1:8000/product">
    <input type="submit" value="Voltar"/>
   </a>
