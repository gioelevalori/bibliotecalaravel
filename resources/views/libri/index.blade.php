@extends('layouts.template')

@section('content')
<a class="btn btn-dark" href="/libri/create" role="button">Nuovo Libro</a>
<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <td>Titolo</td>
        <td>Autore</td>
        <td>Editore</td>
        <td>Luogo Edizione</td>
        <td>Condizione Libro</td>
        <td>Codice</td>
        <td>isbn</td>
        <td>isbn13</td>
        <td>Argomento</td>
        <td>Anno Edizione</td>
        <td>Stato</td>
        <th colspan = "2">Azioni</th>
    </tr>

@foreach ($libri as $libro)
<tr>
    <td>{{ $libro->id }}</td>
    <td>{{ $libro->Titolo }}</td>
    <td>{{ dd($libro->editori) }}</td>
    <td>{{ $libro->editore_id }}</td>
    <td>{{ $libro->luogo_edizione }}</td>
    <td>{{ $libro->condizione_libro }}</td>
    <td>{{ $libro->codice }}</td>
    <td>{{ $libro->isbn }}</td>
    <td>{{ $libro->isbn13 }}</td>
    <td>{{ $libro->argomento }}</td>
    <td>{{ $libro->anno_edizione }}</td>
    <td>{{ $libro->stato }}</td>

    <td><a href="/libri/{{ $libro->id }}/edit" class="btn btn-primary">Modifica</a></td>
    <td>
        <form method="post" action="{{ route('libri.destroy', $libro->id) }}">
            @method('DELETE')
            @csrf
            <input type="submit" value="Elimina" class="btn btn-primary">
        </form>
       </td>
</tr>
@endforeach
</table>




@endsection
