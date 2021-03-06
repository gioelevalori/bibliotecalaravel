@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<h1>Autori</h1> 
<a class="btn btn-dark" href="autori/create" role="button">Nuovo Autore</a>
<br>
<br>

<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cognome</th>
        <th colspan = "2">Azioni</th>
    </tr>

@foreach ($autori as $autore)
<tr>
    <td>{{ $autore->id }}</td>
    <td>{{ $autore->nome }}</td>
    <td>{{ $autore->cognome }}</td>
    <td><a href="/admin/autori/{{ $autore->id }}/edit" class="btn btn-primary">Modifica</a></td>
    <td>
        <form method="post" action="{{ route('autori.destroy', $autore->id) }}">
            @method('DELETE')
            @csrf
            <input type="submit" value="Elimina" class="btn btn-primary">
        </form>
       </td>
</tr>
@endforeach
</table>




@endsection
