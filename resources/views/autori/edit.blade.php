@extends('layouts.template')

@section('content')
  
<form method="post" action="{{ route('autori.update', $autori->id) }} ">
@method('PUT')
@csrf
Nome:<br>
<input type="text" name="nome" class="form-control" value = " {{ $autori->nome}}">   
Cognome:<br>
<input type="text" name="cognome" class="form-control" value = " {{ $autori->cognome}}">   
<br> 
<input type="submit" value="Salva" class="btn btn-primary" />

</form>



@endsection 