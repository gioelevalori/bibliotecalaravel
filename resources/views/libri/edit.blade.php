@extends('layouts.template')

@section('content')
  
<form method="post" action="{{ route('libri.update', $libri->id) }} ">
  

@method('PUT')
@csrf
Titolo:<br>
<input type="text" name="titolo" class="form-control" value = " {{ $libri->titolo}}">   
Editore:<br>
@foreach ($libri as $libro)
{{ dd($libri->editore)}}
@endforeach

 
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