@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<h1>Prestiti</h1> 
<a class="btn btn-dark" href="prestiti/create" role="button">Nuovo Prestito</a>
<br>
<br>

<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Utente</th>
        <th>Libro</th>
        <th>Data prestito</th>
        <th>Data restituzione</th>
        <th colspan = "2">Azioni</th>
    </tr>

@foreach ($prestiti as $prestito)
<tr>
    <td>{{ $prestito->id }}</td>
    <td>{{ $prestito->utente_id }}</td>
    <td>{{ $prestito->libro_id }}</td>
    <td>{{ $prestito->data_prestito }}</td>
    <td>{{ $prestito->data_riconsegna }}</td>
    <td><a href="/admin/prestiti/{{ $prestito->id }}/edit" class="btn btn-primary">Modifica</a></td>
    <td>
        <form method="post" action="{{ route('prestiti.destroy', $prestito->id) }}">
            @method('DELETE')
            @csrf
            <input type="submit" value="Elimina" class="btn btn-primary">
        </form>
       </td>
</tr>
@endforeach
</table>




@endsection
