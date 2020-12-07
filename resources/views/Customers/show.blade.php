<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')

<div>
    <h3 class="mt-3"> Customers detal </h3>
    <ul class= "list-unstyled"> 
     
        <li><b>Customer code:</b> {{$customers->customer_code}}</li>
        <li><b>Customer name:</b> {{$customers->customer_name}}</li>
        <li> <a href="https://www.google.com/search?q={{$customers->customer_name}}"> Google link </a>
        </li>
    <a href="{{ route ('customers.index')}}" class="btn btn-outline-primary mt-3">Back</a>
</div>
@endsection
