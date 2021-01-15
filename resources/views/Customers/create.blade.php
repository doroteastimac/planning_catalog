@extends('layouts.app')

@section('content')
<div vlass="mt-5 col-sm-6 mx-auto">
    <form action="{{route('customers.store')}}" method="POST">
    @csrf
    <div class="form-group mt-3">
        <label for="customer_code"> <b>Šifra kupca</b> </label>
        <input value="{{@old('customer_code')}}" name="customer_code" type="text" class="form-control" id="customer_code">
        @if ($errors ->has ('customer_code'))
            <span class="text-danger"> {{$errors -> first ('customer_code')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="customer_name"> <b>Naziv kupca </b></label>
        <input value="{{@old('customer_name')}}" name="customer_name" type="text" class="form-control" id="customer_name">
        @if ($errors ->has ('customer_name'))
            <span class="text-danger"> {{$errors -> first ('customer_name')}}</span>
        @endif
    </div>

    

<button type="submit" class="btn btn-primary float-right"> Unesi</button>
<a href="{{ route ('customers.index') }}" class=" btn btn-link"> Otkaži </a>
    </form>
</div>
@endsection


