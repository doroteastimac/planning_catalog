@extends('layouts.app')

@section('content')
<div vlass="mt-5 col-sm-6 mx-auto">
    <form action="{{route('catalogs.update',['catalog' => $catalogs->id] )}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="starts_at"> Početak </label>
        <input value="{{$catalogs -> starts_at}}" name="starts_at" type="text" class="form-control" id="starts_at">
        @if ($errors ->has ('starts_at'))
            <span class="text-danger"> {{$errors -> first ('starts_at')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="ends_at"> Kraj </label>
        <input value="{{$catalogs -> ends_at}}" name="ends_at" type="text" class="form-control" id="ends_at">
        @if ($errors ->has ('ends_at'))
            <span class="text-danger"> {{$errors -> first ('ends_at')}}</span>
        @endif
    </div>

    <div class="form-group">
            <label for="catalog">Katalog ID</label>
            {{ Form::select('catalog_type_id', $catalog_types, $catalogs->catalog_type_id, ['class' => 'form-control', 'id' => 'catalog']) }}
    </div>

<button type="submit" class="btn btn-primary float-right"> Spremi</button>
<a href="{{ route ('articles.index') }}" class=" btn btn-link"> Odustani </a>
    </form>
</div>
@endsection