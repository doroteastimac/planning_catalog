<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3"> Producers detal </h3>
    <ul class= "list-unstyled"> 
     
        <li><b>Producer code:</b> {{$producers->producer_code}}</li>
        <li><b>Producer name:</b> {{$producers->producer_name}}</li>
        <li> <a href="https://www.google.com/search?q={{$producers->producer_name}}"> Google link </a>
        </li>
    <a href="{{ route ('producers.index')}}" class="btn btn-outline-primary mt-3">Back</a>
</div>

@endsection
