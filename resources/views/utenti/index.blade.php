@extends('layouts.template')

@section('content')
<br>
<h1>Utenti</h1>
<br>
<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Email</th>
        <th>Telefono</th>
        <th colspan = "2">Azioni</th>
    </tr>

@foreach ($utenti as $utente)
<tr>
    <td>{{ $utente->id }}</td>
    <td>{{ $utente->name }}</td>
    <td>{{ $utente->cognome }}</td>
    <td>{{ $utente->email }}</td>
    <td>{{ $utente->telefono }}</td>
    <td><a href="/utenti/{{ $utente->id }}/edit" class="btn btn-primary">Modifica</a></td>
    <td>
        <form method="post" action="{{ route('utenti.destroy', $utente->id) }}">
            @method('DELETE')
            @csrf
            <input type="submit" value="Elimina" class="btn btn-primary">
        </form>
       </td>
</tr>
@endforeach
</table>




@endsection
