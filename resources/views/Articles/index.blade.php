<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route ('articles.create')}}" class="btn btn-primary mt-5"> ADD </a>
<table class="table mt-3">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Šifra artikla</th>
      <th scope="col">Naziv</th>
      <th scope="col">TP</th>
      <th scope="col">PAL</th>
      <th scope="col">Kategorija</th>
      <th>Actions</th>
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
        <td> 
          <a class="btn btn-outline-primary" href="{{ route ('articles.show', ['article' => $articles -> id])}}"> Details</a>
          <a class="btn btn-outline-primary" href="{{ route ('articles.edit', ['article' => $articles -> id])}}">edit</a>
        </td>
        </tr>
    @endforeach
    </tbody>
  
</table>

@endsection
