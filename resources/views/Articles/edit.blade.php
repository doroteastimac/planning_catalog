@extends('layouts.app')

@section('content')
<div vlass="mt-5 col-sm-6 mx-auto">
    <form action="{{route('articles.update',['article' => $articles->id] )}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mt-3">
        <label for="article_code"><b> Šifra artikla</b> </label>
        <input value="{{$articles -> article_code}}" name="article_code" type="text" class="form-control" id="article_code">
        @if ($errors ->has ('article_code'))
            <span class="text-danger"> {{$errors -> first ('article_code')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="article_name"><b> Naziv artikla</b> </label>
        <input value="{{$articles -> article_name}}" name="article_name" type="text" class="form-control" id="article_name">
        @if ($errors ->has ('article_name'))
            <span class="text-danger"> {{$errors -> first ('article_name')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="article_tp"> <b>TP </b></label>
        <input value="{{$articles -> article_tp}}" name="article_tp" type="text" class="form-control" id="article_tp">
        @if ($errors ->has ('article_tp'))
            <span class="text-danger"> {{$errors -> first ('article_tp')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="article_pal"> <b>PAL </b></label>
        <input value="{{$articles -> article_pal}}" name="article_pal" type="text" class="form-control" id="article_pal">
        @if ($errors ->has ('article_pal'))
            <span class="text-danger"> {{$errors -> first ('article_pal')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="category"> <b>Kategorija </b></label>
        <input value="{{$articles -> category}}" name="category" type="text" class="form-control" id="category">
        @if ($errors ->has ('category'))
            <span class="text-danger"> {{$errors -> first ('category')}}</span>
        @endif
    </div>


    <div class="form-group">
            <label for="producer"><b>Dobavljač</b></label>
            {{ Form::select('producer_id', $producers, $articles->producer_id, ['class' => 'form-control', 'id' => 'producer']) }}
    </div>

<button type="submit" class="btn btn-primary float-right"> Spremi</button>
<a href="{{ route ('articles.index') }}" class=" btn btn-link"> Odustani </a>
    </form>
</div>
@endsection
