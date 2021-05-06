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
<form method="post" action="{{ route('editori.store') }} ">
@csrf
<h1>Nuovo editore</h1>
Nome:<br>
<input type="text" name="nome" class="form-control">   
Sito editore:<br>
<input type="text" name="sito_editore" class="form-control">   
<br> 
<input type="submit" value="Salva" class="btn btn-primary" />

</form>

</div>

</div>

@endsection 