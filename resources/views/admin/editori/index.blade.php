@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<h1>Editori</h1> 
<a class="btn btn-dark" href="editori/create" role="button">Nuovo Editore</a>
<br>
<br>

<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sito editore</th>
        <th colspan = "2">Azioni</th>
    </tr>

@foreach ($editori as $editore)
<tr>
    <td>{{ $editore->id }}</td>
    <td>{{ $editore->nome }}</td>
    <td>{{ $editore->sito_editore }}</td>
    <td><a href="/admin/editori/{{ $editore->id }}/edit" class="btn btn-primary">Modifica</a></td>
    <td>
        <form method="post" action="{{ route('editori.destroy', $editore->id) }}">
            @method('DELETE')
            @csrf
            <input type="submit" value="Elimina" class="btn btn-primary">
        </form>
       </td>
</tr>
@endforeach
</table>




@endsection
