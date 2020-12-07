<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3"> Centers detal </h3>
    <ul class= "list-unstyled"> 
     
        <li><b>Center code:</b> {{ $centers -> center_code}}</li>
        <li><b>Center name:</b> {{ $centers -> center_name}}</li>
        <li><b>Center adress:</b> {{ $centers -> center_address}}</li>
        
        <li> <a href="https://www.google.com/search?q={{ $centers -> center_address}}"> Google link </a>
        </li>
    <a href="{{ route ('centers.index')}}" class="btn btn-outline-primary mt-3">Back</a>
</div>

@endsection
