<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Datum početka</th>
      <th scope="col">Datum kraja</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($catalogs->items() as $catalogs)
        <tr>
        <td>{{$catalogs->id}}</td>
        <td>{{$catalogs->starts_at}}</td>
        <td>{{$catalogs->ends_at}}</td>
                </tr>
    @endforeach
    </tbody>
  
</table>
@endsection