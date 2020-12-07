<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3"> Catalog type detal </h3>
    <ul class= "list-unstyled"> 
     
        <li><b>Type:</b> {{$catalog_types -> catalog_type}} </li>
        <li> <a href="https://www.google.com/search?q={{$catalog_types->catalog_type}}"> Google link </a>
        </li>
    <a href="{{ route ('catalog_types.index')}}" class="btn btn-outline-primary mt-3">Back</a>
</div>

@endsection
