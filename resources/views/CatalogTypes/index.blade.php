<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route ('catalog_types.create')}}" class="btn btn-info mt-5"><b>  Dodaj </b> </a>
<table class="table table-striped mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tip kataloga</th>
      <th> Actions </th>  
    </tr>
  </thead>
  <tbody>
    @foreach($catalog_types->items() as $catalog_types)
        <tr>
        <td>{{$catalog_types->id}}</td>
        <td>{{$catalog_types->catalog_type}}</td>
        <td> 
          <a class="btn btn-outline-info" href="{{ route ('catalog_types.show', ['catalog_type' => $catalog_types -> id])}}"> Detalji</a>
          <a class="btn btn-outline-info" href="{{ route ('catalog_types.edit', ['catalog_type' => $catalog_types -> id])}}">Uredi</a>
        </td>
        </tr>
    @endforeach
    </tbody>
  
</table>
@endsection