<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Šifra kupca</th>
      <th scope="col">Naziv kupca</th>
      </tr>
  </thead>
  <tbody>
    @foreach($customers->items() as $customers)
        <tr>
        <td>{{$customers->id}}</td>
        <td>{{$customers->customer_code}}</td>
        <td>{{$customers->customer_name}}</td>
       </tr>
    @endforeach
    </tbody>
  
</table>

@endsection
