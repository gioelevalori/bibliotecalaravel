@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<div class="container">
@if ($errors->any())
<div class="container">
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post" action="{{ route('prestiti.store') }} ">
@csrf
<h1>Nuovo prestito</h1>
Utente:
<select name="utente_id" class="form-control">
<option value="0">Seleziona:</option>
    @foreach ($utenti as $utente)
        <option value="{{$utente->id}}">{{$utente->name}}</option>
    @endforeach
</select>

Libro:
<select name="libro_id" class="form-control">
<option value="0">Seleziona:</option>
    @foreach ($libri as $libro)
        <option value="{{$libro->id}}">{{$libro->titolo}}</option>
    @endforeach
</select>

Data Prestito:<br>
<input type="date" name="data_prestito" class="form-control">   
Data Riconsegna:<br>
<input type="date" name="data_riconsegna" class="form-control">   
<br> 
<input type="submit" value="Salva" class="btn btn-primary" />

</form>

</div>

</div>

@endsection 