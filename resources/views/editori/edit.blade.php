@extends('layouts.template')

@section('content')
  
<form method="post" action="{{ route('editori.update', $editori->id) }} ">
@method('PUT')
@csrf
Nome:<br>
<input type="text" name="nome" class="form-control" value = " {{ $editori->nome}}">   
Sito editore:<br>
<input type="text" name="sito_editore" class="form-control" value = " {{ $editori->sito_editore}}">   
<br>
<input type="submit" value="Salva" class="btn btn-primary" />

</form>



@endsection 