<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div class="mt-5 text-center">
    <h3 class="mt-3"> Catalog type detal </h3>
    <img src="https://picsum.photos/seed/picsum/300/300" alt="image" class="d-block mx-auto rounded-circle">
    <ul class= "list-unstyled"> 
     
        <li><b>Vrsta kataloga: </b> {{$catalog_types -> catalog_type}} </li>
        <li> <a href="https://www.google.com/search?q={{$catalog_types->catalog_type}}"> Google link </a>
        </li>
        <div class="btn-group" role="group" >
        <a class="btn btn-secondary" href="{{ route('catalog_types.index') }}">Nazad</a>
    <a class="btn btn-primary" href="{{ route('catalog_types.edit', ['catalog_type' => $catalog_types]) }}">Uredi</a>
<form class="form-inline" action="{{ route('catalog_types.destroy', ['catalog_type' => $catalog_types->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    
    <button type="submit" onclick="confirm('Jeste li sigurni?')" class="btn btn-danger">Obriši</button>
</form>
</div>
</div>

@endsection
