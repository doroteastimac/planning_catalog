<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route ('centers.create')}}" class="btn btn-info mt-5"> <b> Dodaj </b> </a>
<table class="table table-striped mt-3">
  <thead class="thead-dark">
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
          <a class="btn btn-outline-info" href="{{ route ('centers.show', ['center' => $centers -> id])}}"> Detalji</a>
          <a class="btn btn-outline-info" href="{{ route ('centers.edit', ['center' => $centers -> id])}}">Uredi</a>
        </td>
                </tr>
    @endforeach
    </tbody>
  
</table>

@endsection
