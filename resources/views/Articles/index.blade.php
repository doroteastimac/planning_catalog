<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Šifra artikla</th>
      <th scope="col">Naziv</th>
      <th scope="col">TP</th>
      <th scope="col">PAL</th>
      <th scope="col">Kategorija</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles->items() as $articles)
        <tr>
        <td>{{$articles->id}}</td>
        <td>{{$articles->article_code}}</td>
        <td>{{$articles->article_name}}</td>
        <td>{{$articles->article_tp}}</td>
        <td>{{$articles->article_pal}}</td>
        <td>{{$articles->category}}</td>
        </tr>
    @endforeach
    </tbody>
  
</table>

@endsection
