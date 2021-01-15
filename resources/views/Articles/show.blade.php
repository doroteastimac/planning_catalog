<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div class="mt-5 text-center">
    <h1> {{$articles->article_name}} </h1>
    <img src="https://picsum.photos/seed/picsum/300/300" alt="image" class="d-block mx-auto rounded-circle">
    <ul class= "list-unstyled"> 
     
        <li><b>Naziv artikla:</b> {{ $articles -> article_name}}</li>
        <li><b>Kategorija:</b> {{ $articles -> category}}</li>
        <li> <a href="https://www.google.com/search?q={{$articles -> article_name}}"> Google link </a>
        </li>
    

    <div class="btn-group" role="group" >
<a class="btn btn-secondary" href="{{ route('articles.index') }}">Nazad</a>
<a class="btn btn-primary" href="{{ route('articles.edit', ['article' => $articles]) }}">Uredi</a>
<form class="form-inline" action="{{ route('articles.destroy', ['article' => $articles->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    
    <button type="submit" onclick="confirm('Jeste li sigurni?')" class="btn btn-danger">Obriši</button>
</form>
</div>

</div>



@endsection

