@extends('layouts.template')

@section('content')
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
<form method="post" action="{{ route('libri.store') }} ">
@csrf
<h1>Nuovo libro</h1>
Titolo:<br>
<input type="text" name="titolo" class="form-control">   
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
<input type="text" name="luogo_edizione" class="form-control">   
Condizione libro:<br>
<input type="text" name="condizione_libro" class="form-control"> 
Codice:<br>
<input type="text" name="codice" class="form-control"> 
Isbn:<br>
<input type="text" name="isbn" class="form-control"> 
Isbn13:<br>
<input type="text" name="isbn13" class="form-control">
Argomento:<br>
<input type="text" name="argomento" class="form-control">
Anno edizione:<br>
<input type="date" name="anno_edizione" class="form-control">
Stato:<br>
<input type="text" name="stato" class="form-control">

<br> 
<input type="submit" value="Salva" class="btn btn-primary" />

</form>

</div>

@endsection 