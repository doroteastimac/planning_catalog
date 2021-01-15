@extends('layouts.app')

@section('content')
<div vlass="mt-5 col-sm-6 mx-auto">
    <form action="{{route('catalogs.store')}}" method="POST">
    @csrf
    <div class="form-group mt-3">
        <label for="starts_at"> <b>Početak </b></label>
        <input value="{{@old('starts_at')}}" name="starts_at" type="text" class="form-control" id="starts_at">
        @if ($errors ->has ('starts_at'))
            <span class="text-danger"> {{$errors -> first ('starts_at')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="ends_at"> <b>Kraj </b></label>
        <input value="{{@old('ends_at')}}" name="ends_at" type="text" class="form-control" id="ends_at">
        @if ($errors ->has ('ends_at'))
            <span class="text-danger"> {{$errors -> first ('ends_at')}}</span>
        @endif
    </div>    

    <div class="form-group">
    <label for="name"><b>Katalog ID</b></label>
        <input type="number" name="catalog_type_id" value="{{ @old('catalog_type_id') }}" class="form-control mb-5" id="catalog_type_id">
        @if ($errors->has('catalog_type_id'))
            <span class="text-danger">{{ $errors->first('catalog_type_id') }}</span>
        @endif

    </div>
    
       

<button type="submit" class="btn btn-primary float-right"> Unesi</button>
<a href="{{ route ('catalogs.index') }}" class=" btn btn-link"> Otkaži </a>
    </form>
</div>
@endsection