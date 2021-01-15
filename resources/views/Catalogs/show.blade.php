<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<<div class="mt-5 text-center">
    <h1> {{$catalogs->catalog_type->catalog_type}} </h1>
    <img src="https://picsum.photos/seed/picsum/300/300" alt="image" class="d-block mx-auto rounded-circle">
    <ul class= "list-unstyled">
     
        <li><b>Početak kataloga:</b> {{ $catalogs -> starts_at}}</li>
        <li><b>Kraj kataloga:</b> {{ $catalogs -> ends_at}}</li>
        </li>
        <div class="btn-group" role="group" >
<a class="btn btn-secondary" href="{{ route('catalogs.index') }}">Nazad</a>
<a class="btn btn-primary" href="{{ route('catalogs.edit', ['catalog' => $catalogs]) }}">Uredi</a>
<form class="form-inline" action="{{ route('catalogs.destroy', ['catalog' => $catalogs->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    
    <button type="submit" onclick="confirm('Jeste li sigurni?')" class="btn btn-danger">Obriši</button>
</form>
</div>
</div>

@endsection
