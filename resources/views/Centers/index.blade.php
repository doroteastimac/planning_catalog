<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Šifra centra</th>
      <th scope="col">Naziv</th>
      <th scope="col">Adresa</th>
    </tr>
  </thead>
  <tbody>
    @foreach($centers->items() as $centers)
        <tr>
        <td>{{$centers->id}}</td>
        <td>{{$centers->center_code}}</td>
        <td>{{$centers->center_name}}</td>
        <td>{{$centers->center_address}}</td>
                </tr>
    @endforeach
    </tbody>
  
</table>

@endsection
