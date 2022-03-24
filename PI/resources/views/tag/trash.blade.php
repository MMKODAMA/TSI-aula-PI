<div>
    {{ session()->get('success')}}
</div>

<table class="table table-secondary table-striped">
<thead>
    <tr>
        <td scope="col">ID</td>
        <td scope="col">Nome</td>
    </tr>
</thead>
    @foreach($tags as $tag)

    <tr>
        <td>{{$tag->id}}</td>
        <td>{{$tag->name}}</td>
        <td><a href="{{ route('tag.restore', $tag->id)}}">Restaurar</a></td>

    </tr>
    @endforeach
</table>
<br>
<a class="btn btn-lg btn-primary me-5" href="{{route('tag.index')}}">voltar</a>

