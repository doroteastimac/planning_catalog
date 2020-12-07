<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route ('catalog_types.create')}}" class="btn btn-primary mt-5"> ADD </a>
<table class="table mt-3">
  <thead class="thead-light">
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
          <a class="btn btn-outline-primary" href="{{ route ('catalog_types.show', ['catalog_type' => $catalog_types -> id])}}"> Details</a>
          <a class="btn btn-outline-primary" href="{{ route ('catalog_types.edit', ['catalog_type' => $catalog_types -> id])}}">edit</a>
        </td>
        </tr>
    @endforeach
    </tbody>
  
</table>
@endsection