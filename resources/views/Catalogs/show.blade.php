<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<<div class="mt-5 text-center">
    <h1> {{$catalogs->catalog_type->catalog_type}} </h1>
    <img src="https://picsum.photos/seed/picsum/300/300" alt="image" class="d-block mx-auto rounded-circle">
     
        <li><b>Starts at:</b> {{ $catalogs -> starts_at}}</li>
        <li><b>Ends at:</b> {{ $catalogs -> ends_at}}</li>
        </li>
    <a href="{{ route ('catalogs.index')}}" class="btn btn-outline-primary mt-3">Back</a>
</div>

@endsection
