@extends('layouts.app')

@section('content')
<div vlass="mt-5 col-sm-6 mx-auto">
    <form action="{{route('articles.store')}}" method="POST">
    @csrf
    <div class="form-group mt-3">
        <label for="article_code"> <b>Šifra artikla</b> </label>
        <input value="{{@old('article_code')}}" name="article_code" type="text" class="form-control" id="article_code">
        @if ($errors ->has ('article_code'))
            <span class="text-danger"> {{$errors -> first ('article_code')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="article_name"> <b>Naziv artikla </b></label>
        <input value="{{@old('article_name')}}" name="article_name" type="text" class="form-control" id="article_name">
        @if ($errors ->has ('article_name'))
            <span class="text-danger"> {{$errors -> first ('article_name')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="article_tp"> <b>TP </b></label>
        <input value="{{@old('article_tp')}}" name="article_tp" type="text" class="form-control" id="article_tp">
        @if ($errors ->has ('article_tp'))
            <span class="text-danger"> {{$errors -> first ('article_tp')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="article_pal"> <b>PAL </b></label>
        <input value="{{@old('article_pal')}}" name="article_pal" type="text" class="form-control" id="article_pal">
        @if ($errors ->has ('article_pal'))
            <span class="text-danger"> {{$errors -> first ('article_pal')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="category"> <b>Kategorija</b> </label>
        <input value="{{@old('category')}}" name="category" type="text" class="form-control" id="category">
        @if ($errors ->has ('category'))
            <span class="text-danger"> {{$errors -> first ('category')}}</span>
        @endif
    </div>

    <div class="form-group">
    <label for="name"><b>Producer ID</b></label>
        <input type="number" name="producer_id" value="{{ @old('producer_id') }}" class="form-control mb-5" id="name">
        @if ($errors->has('product_id'))
            <span class="text-danger">{{ $errors->first('producer_id') }}</span>
        @endif

    </div>
    
    

   

<button type="submit" class="btn btn-primary float-right"> Unesi</button>
<a href="{{ route ('articles.index') }}" class=" btn btn-link"> Otkaži </a>
    </form>
</div>
@endsection


            
            