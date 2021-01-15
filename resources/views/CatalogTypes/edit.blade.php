@extends('layouts.app')

@section('content')
<div vlass="mt-5 col-sm-6 mx-auto">
    <form action="{{route('catalog_types.update',['catalog_type' => $catalog_types->id] )}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="catalog_type"> <b> Vrsta kataloga </b></label>
        <input value="{{ $catalog_types ->catalog_type}}" name="catalog_type" type="text" class="form-control" id="catalog_type">
        @if ($errors ->has ('catalog_type'))
            <span class="text-danger"> {{$errors -> first ('catalog_type')}}</span>
        @endif
    </div>

    

<button type="submit" class="btn btn-primary float-right"> Spremi</button>
<a href="{{ route ('catalog_types.index') }}" class=" btn btn-link"> Odustani </a>
    </form>
</div>
@endsection