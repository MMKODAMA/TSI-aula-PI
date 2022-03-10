<form action="{{route('product.update', $product->id)}}" method="POST">
    @csrf
    @method('PUT')
    Nome do Produto: <input type="text" name="name" value="{{$product->name}}">
    Descrição: <input type="text" name="description" value="{{$product->description}}">
    Preço: <input type="number" step="0.1" name="price" value="{{$product->price}}">
    Estoque: <input type="number" name="stock" value="{{$product->stock}}">
    Selecione uma categoria:
    <select name="category_id">
        @foreach($categories as $category)
        <option value="{{$category->id}}"
             {{$product->category_id == $category->id ? 'selected' : '' }}>
             {{$category->name}}</option>
        @endforeach
    </select>
    <button type="submit">Enviar</button>
</form>
