<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route ('customers.create')}}" class="btn btn-primary mt-5"> ADD </a>
<table class="table mt-3">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Šifra kupca</th>
      <th scope="col">Naziv kupca</th>
      <th> Actions </th>
      </tr>
  </thead>
  <tbody>
    @foreach($customers->items() as $customers)
        <tr>
        <td>{{$customers->id}}</td>
        <td>{{$customers->customer_code}}</td>
        <td>{{$customers->customer_name}}</td>
        <td> 
          <a class="btn btn-outline-primary" href="{{ route ('customers.show', ['customer' => $customers -> id])}}"> Details</a>
          <a class="btn btn-outline-primary" href="{{ route ('customers.edit', ['customer' => $customers -> id])}}">edit</a>
        </td>
        
       </tr>
    @endforeach
    </tbody>
  
</table>

@endsection
