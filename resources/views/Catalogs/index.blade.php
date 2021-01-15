<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route ('catalogs.create')}}" class="btn btn-info mt-5"> <b> Dodaj </b> </a>
<table class="table table-striped mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Datum početka</th>
      <th scope="col">Datum kraja</th>
      <th scope="col">Vrsta kataloga</th>
      <th> Actions </th>
    </tr>
  </thead>
  <tbody>
    @foreach($catalogs->items() as $catalogs)
        <tr>
        <td>{{$catalogs->id}}</td>
        <td>{{$catalogs->starts_at}}</td>
        <td>{{$catalogs->ends_at}}</td>
        <td>{{$catalogs->catalog_type->catalog_type}}</td>
        <td> 
          <a class="btn btn-outline-info" href="{{ route ('catalogs.show', ['catalog' => $catalogs -> id])}}"> Details</a>
          <a class="btn btn-outline-info" href="{{ route ('catalogs.edit', ['catalog' => $catalogs -> id])}}">edit</a>
        </td>
                </tr>
    @endforeach
    </tbody>
  
</table>
@endsection