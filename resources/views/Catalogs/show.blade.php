<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3"> Catalog detal </h3>
    <ul class= "list-unstyled"> 
     
        <li><b>Starts at:</b> {{ $catalogs -> starts_at}}</li>
        <li><b>Ends at:</b> {{ $catalogs -> ends_at}}</li>
        </li>
    <a href="{{ route ('catalogs.index')}}" class="btn btn-outline-primary mt-3">Back</a>
</div>

@endsection
