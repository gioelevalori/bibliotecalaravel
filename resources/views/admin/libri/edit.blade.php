@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
  
<form method="post" action="{{ route('libri.update', $libri->id) }} ">
  

@method('PUT')
@csrf
Titolo:<br>
<input type="text" name="titolo" class="form-control" value = " {{ $libri->titolo}}">   
Editore:
<select name="editore_id" class="form-control">
<option value="0">Seleziona:</option>
    @foreach ($editori as $editore)
        <option value="{{$editore->id}}">{{$editore->nome}}</option>
    @endforeach
</select>
Sito Editore:
<select name="editore_id" class="form-control">
<option value="0">Seleziona:</option>
    @foreach ($editori as $editore)
        <option value="{{$editore->id}}">{{$editore->sito_editore}}</option>
    @endforeach
</select>

 
Luogo edizione:<br>
<input type="text" name="luogo_edizione" class="form-control" value = " {{ $libri->luogo_edizione}}">   
Condizione libro:<br>
<input type="text" name="condizione_libro" class="form-control" value = " {{ $libri->condizione_libro}}"> 
Codice:<br>
<input type="text" name="codice" class="form-control" value = " {{ $libri->codice}}"> 
Isbn:<br>
<input type="text" name="isbn" class="form-control" value = " {{ $libri->isbn}}"> 
Isbn13:<br>
<input type="text" name="isbn13" class="form-control" value = " {{ $libri->isbn13}}">
Argomento:<br>
<input type="text" name="argomento" class="form-control" value = " {{ $libri->argomento}}">
Anno edizione:<br>
<input type="text" name="anno_edizione" class="form-control" value = " {{ $libri->anno_edizione}}">
Stato:<br>
<input type="text" name="stato" class="form-control" value = " {{ $libri->stato}}">

<br>
<input type="submit" value="Salva" class="btn btn-primary" />

</form>



@endsection 