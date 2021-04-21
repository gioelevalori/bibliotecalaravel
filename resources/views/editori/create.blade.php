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
<form method="post" action="{{ route('editori.store') }} ">
@csrf
<h1>Nuovo editore</h1>
Nome:<br>
<input type="text" name="nome" class="form-control">   
Cognome:<br>
<input type="text" name="cognome" class="form-control">   
<br> 
Sito editore:<br>
<input type="text" name="sito_editore" class="form-control">   
<br> 
<input type="submit" value="Salva" class="btn btn-primary" />

</form>

</div>

@endsection 