<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div class="mt-5 text-center">
    <h3 class="mt-3"> Centers detal </h3>
    <img src="https://picsum.photos/seed/picsum/300/300" alt="image" class="d-block mx-auto rounded-circle">
    <ul class= "list-unstyled">
     
        <li><b>Šifra centra:</b> {{ $centers -> center_code}}</li>
        <li><b>Ime centra:</b> {{ $centers -> center_name}}</li>
        <li><b>Adresa centra:</b> {{ $centers -> center_address}}</li>
        
        <li> <a href="https://www.google.com/search?q={{ $centers -> center_address}}"> Google link </a>
        </li>
        <div class="btn-group" role="group" >
<a class="btn btn-secondary" href="{{ route('centers.index') }}">Nazad</a>
<a class="btn btn-primary" href="{{ route('centers.edit', ['center' => $centers]) }}">Uredi</a>
<form class="form-inline" action="{{ route('centers.destroy', ['center' => $centers->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    
    <button type="submit" onclick="confirm('Jeste li sigurni?')" class="btn btn-danger">Obriši</button>
</form>
</div>
</div>

@endsection
