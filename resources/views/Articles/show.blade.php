<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3"> Article detal </h3>
    <ul class= "list-unstyled"> 
     
        <li><b>Article name:</b> {{ $articles -> article_name}}</li>
        <li><b>Category:</b> {{ $articles -> category}}</li>
        <li> <a href="https://www.google.com/search?q={{$articles -> article_name}}"> Google link </a>
        </li>
    <a href="{{ route ('articles.index')}}" class="btn btn-outline-primary mt-3">Back</a>
</div>


@endsection

