<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route ('customers.create')}}" class="btn btn-info mt-5"><b>  Dodaj </b> </a>
<table class="table table-striped mt-3">
  <thead class="thead-dark">
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
          <a class="btn btn-outline-info" href="{{ route ('customers.show', ['customer' => $customers -> id])}}"> Detalji</a>
          <a class="btn btn-outline-info" href="{{ route ('customers.edit', ['customer' => $customers -> id])}}">Uredi</a>
        </td>
        
       </tr>
    @endforeach
    </tbody>
  
</table>

@endsection
