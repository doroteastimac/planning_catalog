@extends('layouts.app')

@section('content')
<div vlass="mt-5 col-sm-6 mx-auto">
    <form action="{{route('producers.store')}}" method="POST">
    @csrf
    <div class="form-group mt-3">
        <label for="producer_code"> <b>Šifra dobavljača</b> </label>
        <input value="{{@old('producer_code')}}" name="producer_code" type="text" class="form-control" id="producer_code">
        @if ($errors ->has ('producer_code'))
            <span class="text-danger"> {{$errors -> first ('producer_code')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="producer_name"> <b>Naziv dobavljača </b></label>
        <input value="{{@old('producer_name')}}" name="producer_name" type="text" class="form-control" id="producer_name">
        @if ($errors ->has ('producer_name'))
            <span class="text-danger"> {{$errors -> first ('producer_name')}}</span>
        @endif
    </div>


<button type="submit" class="btn btn-primary float-right"> Unesi</button>
<a href="{{ route ('producers.index') }}" class=" btn btn-link"> Otkaži </a>
    </form>
</div>
@endsection