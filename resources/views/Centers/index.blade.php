<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route ('centers.create')}}" class="btn btn-primary mt-5"> ADD </a>
<table class="table mt-3">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Šifra centra</th>
      <th scope="col">Naziv</th>
      <th scope="col">Adresa</th>
      <th> Actions </th>
    </tr>
  </thead>
  <tbody>
    @foreach($centers->items() as $centers)
        <tr>
        <td>{{$centers->id}}</td>
        <td>{{$centers->center_code}}</td>
        <td>{{$centers->center_name}}</td>
        <td>{{$centers->center_address}}</td>
        <td> 
          <a class="btn btn-outline-primary" href="{{ route ('centers.show', ['center' => $centers -> id])}}"> Details</a>
          <a class="btn btn-outline-primary" href="{{ route ('centers.edit', ['center' => $centers -> id])}}">edit</a>
        </td>
                </tr>
    @endforeach
    </tbody>
  
</table>

@endsection
