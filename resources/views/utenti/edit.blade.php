@extends('layouts.template')

@section('content')
  
<form method="post" action="{{ route('utenti.update', $utenti->id) }} ">
@method('PUT')
@csrf
Nome:<br>
<input type="text" name="name" class="form-control" value = " {{ $utenti->name}}">   
Cognome:<br>
<input type="text" name="cognome" class="form-control" value = " {{ $utenti->cognome}}">   
<br> 
Email:<br>
<input type="email" name="email" class="form-control" value = " {{ $utenti->email}}">   
<br>
Telefono:<br>
<input type="text" name="telefono" class="form-control" value = " {{ $utenti->telefono}}">   
<br>
<input type="submit" value="Salva" class="btn btn-primary" />

</form>



@endsection 