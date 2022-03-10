<div>
    {{ session()->get('success')}}
</div>

<table>
    <table border="1">

        <tr>
            <td>ID</td>
            <td>Nome</td>
        </tr>
    @foreach($categories as $category)

    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td><a href="{{ route('category.edit', $category->id)}}">Editar</a></td>
        <td><a href="{{ route('category.destroy', $category->id)}}">Apagar</a></td>

    </tr>
    @endforeach
</table>
<br>
<a href="http://127.0.0.1:8000/category/create">
    <input type="submit" value="Criar"/>
   </a>
