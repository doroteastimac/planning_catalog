<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div class="mt-5 text-center">
    <h1> {{$articles->article_name}} </h1>
    <img src="https://picsum.photos/seed/picsum/300/300" alt="image" class="d-block mx-auto rounded-circle">
    <ul class= "list-unstyled"> 
     
        <li><b>Article name:</b> {{ $articles -> article_name}}</li>
        <li><b>Category:</b> {{ $articles -> category}}</li>
        <li> <a href="https://www.google.com/search?q={{$articles -> article_name}}"> Google link </a>
        </li>
    <a href="{{ route ('articles.index')}}" class="btn btn-outline-primary mt-3">Back</a>
</div>


@endsection

