<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route ('catalogs.create')}}" class="btn btn-primary mt-5"> ADD </a>
<table class="table mt-3">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Datum početka</th>
      <th scope="col">Datum kraja</th>
      <th> Actions </th>
    </tr>
  </thead>
  <tbody>
    @foreach($catalogs->items() as $catalogs)
        <tr>
        <td>{{$catalogs->id}}</td>
        <td>{{$catalogs->starts_at}}</td>
        <td>{{$catalogs->ends_at}}</td>
        <td> 
          <a class="btn btn-outline-primary" href="{{ route ('catalogs.show', ['catalog' => $catalogs -> id])}}"> Details</a>
          <a class="btn btn-outline-primary" href="{{ route ('catalogs.edit', ['catalog' => $catalogs -> id])}}">edit</a>
        </td>
                </tr>
    @endforeach
    </tbody>
  
</table>
@endsection