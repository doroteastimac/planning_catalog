<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route ('articles.create')}}" class="btn btn-info mt-5"><b> Dodaj </b></a>
<table class="table table-striped mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Šifra artikla</th>
      <th scope="col">Naziv</th>
      <th scope="col">TP</th>
      <th scope="col">PAL</th>
      <th scope="col">Kategorija</th>
      <th scope="col">Dobavljač</th>
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
        <td>{{$articles->producer->producer_name}}</td>
        <td> 
          <a class="btn btn-outline-info" href="{{ route ('articles.show', ['article' => $articles -> id])}}">Detalji</a>
          <a class="btn btn-outline-info" href="{{ route ('articles.edit', ['article' => $articles -> id])}}">Uredi</a>
        </td>
        </tr>
    @endforeach
    </tbody>
  
</table>

@endsection
