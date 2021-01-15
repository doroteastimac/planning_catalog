<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div class="mt-5 text-center">
    <h3 class="mt-3"> Producers detal </h3>
    <img src="https://picsum.photos/seed/picsum/300/300" alt="image" class="d-block mx-auto rounded-circle">
    <ul class= "list-unstyled">
     
        <li><b>Producer code:</b> {{$producers->producer_code}}</li>
        <li><b>Producer name:</b> {{$producers->producer_name}}</li>
        <li> <a href="https://www.google.com/search?q={{$producers->producer_name}}"> Google link </a>
        </li>
        <div class="btn-group" role="group" >
<a class="btn btn-secondary" href="{{ route('producers.index') }}">Nazad</a>
<a class="btn btn-primary" href="{{ route('producers.edit', ['producer' => $producers]) }}">Uredi</a>
<form class="form-inline" action="{{ route('producers.destroy', ['producer' => $producers->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    
    <button type="submit" onclick="confirm('Jeste li sigurni?')" class="btn btn-danger">Obriši</button>
</form>
</div>
</div>

@endsection
