<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tip kataloga</th>
          
    </tr>
  </thead>
  <tbody>
    @foreach($catalog_types->items() as $catalog_types)
        <tr>
        <td>{{$catalog_types->id}}</td>
        <td>{{$catalog_types->catalog_type}}</td>
        </tr>
    @endforeach
    </tbody>
  
</table>
@endsection