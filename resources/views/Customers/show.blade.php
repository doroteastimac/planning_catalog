<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')

<div class="mt-5 text-center">
    <h3 class="mt-3"> Customers detal </h3>
    <img src="https://picsum.photos/seed/picsum/300/300" alt="image" class="d-block mx-auto rounded-circle">
    <ul class= "list-unstyled"> 
     
        <li><b>Customer code:</b> {{$customers->customer_code}}</li>
        <li><b>Customer name:</b> {{$customers->customer_name}}</li>
        <li> <a href="https://www.google.com/search?q={{$customers->customer_name}}"> Google link </a>
        </li>
        <div class="btn-group" role="group" >
<a class="btn btn-secondary" href="{{ route('customers.index') }}">Nazad</a>
<a class="btn btn-primary" href="{{ route('customers.edit', ['customer' => $customers]) }}">Uredi</a>
<form class="form-inline" action="{{ route('customers.destroy', ['customer' => $customers->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    
    <button type="submit" onclick="confirm('Jeste li sigurni?')" class="btn btn-danger">Obriši</button>
</form>
</div>
</div>
@endsection
