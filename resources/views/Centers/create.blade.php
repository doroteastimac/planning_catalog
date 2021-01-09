@extends('layouts.app')

@section('content')
<div vlass="mt-5 col-sm-6 mx-auto">
    <form action="{{route('centers.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="center_code"> Broj centra </label>
        <input value="{{@old('center_code')}}" name="center_code" type="text" class="form-control" id="center_code">
        @if ($errors ->has ('center_code'))
            <span class="text-danger"> {{$errors -> first ('center_code')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="center_name"> Naziv centra </label>
        <input value="{{@old('center_name')}}" name="center_name" type="text" class="form-control" id="center_name">
        @if ($errors ->has ('center_name'))
            <span class="text-danger"> {{$errors -> first ('center_name')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="center_address"> Adresa centra </label>
        <input value="{{@old('center_address')}}" name="center_address" type="text" class="form-control" id="center_address">
        @if ($errors ->has ('center_addres'))
            <span class="text-danger"> {{$errors -> first ('center_address')}}</span>
        @endif
    </div>

<button type="submit" class="btn btn-primary float-right"> Unesi</button>
<a href="{{ route ('centers.index') }}" class=" btn btn-link"> Otkaži </a>
    </form>
</div>
@endsection


