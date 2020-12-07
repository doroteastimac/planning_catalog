<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route ('producers.create')}}" class="btn btn-primary mt-5"> ADD </a>
<table class="table mt-3">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Šifra dobavljača</th>
      <th scope="col">Naziv dobavljača</th>
      <th> Actions </th>
      </tr>
  </thead>
  <tbody>
    @foreach($producers->items() as $producers)
        <tr>
        <td>{{$producers->id}}</td>
        <td>{{$producers->producer_code}}</td>
        <td>{{$producers->producer_name}}</td>
        <td> 
          <a class="btn btn-outline-primary" href="{{ route ('producers.show', ['producer' => $producers -> id])}}"> Details</a>
          <a class="btn btn-outline-primary" href="{{ route ('producers.edit', ['producer' => $producers -> id])}}">edit</a>
        </td>
        </tr>
    @endforeach
    </tbody>
  
</table>

@endsection
