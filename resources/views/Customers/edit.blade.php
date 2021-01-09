@extends('layouts.app')

@section('content')
<div vlass="mt-5 col-sm-6 mx-auto">
    <form action="{{route('customers.update',['customer' => $customers->id] )}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="customer_code"> Šifra kupca </label>
        <input value="{{ $customers ->customer_code}}" name="customer_code" type="text" class="form-control" id="customer_code">
        @if ($errors ->has ('customer_code'))
            <span class="text-danger"> {{$errors -> first ('customer_code')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="customer_name"> Naziv kupca </label>
        <input value="{{$customers ->customer_name}}" name="customer_name" type="text" class="form-control" id="customer_name">
        @if ($errors ->has ('customer_name'))
            <span class="text-danger"> {{$errors -> first ('customer_name')}}</span>
        @endif
    </div>

    

<button type="submit" class="btn btn-primary float-right"> Spremi</button>
<a href="{{ route ('customers.index') }}" class=" btn btn-link"> Odustani </a>
    </form>
</div>
@endsection