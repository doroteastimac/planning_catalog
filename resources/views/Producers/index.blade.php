<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Šifra dobavljača</th>
      <th scope="col">Naziv dobavljača</th>
      </tr>
  </thead>
  <tbody>
    @foreach($producers->items() as $producers)
        <tr>
        <td>{{$producers->id}}</td>
        <td>{{$producers->producer_code}}</td>
        <td>{{$producers->producer_name}}</td>
        </tr>
    @endforeach
    </tbody>
  
</table>

@endsection
