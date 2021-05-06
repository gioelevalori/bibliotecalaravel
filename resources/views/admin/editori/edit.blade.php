@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<div class="container"> 
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

</div>

@endsection 