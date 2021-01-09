@extends('layouts.app')

@section('content')
<div class="jumbotron-5">
  <h1 class="display-4">Planning catalog</h1>
  <p class="lead">Aplikacija za pomoć pri planiranju kataloga.</p>
  <hr class="my-4">
    
</div>

<form>
  <div class="mb-3">
    <label for="article_code" class="form-label">Šifra artikla</label>
    <input type="text" class="form-control" id="article_code" aria-describedby="article_code">
    <div id="article_code" class="form-text"></div>
      
      <label class="form-label">Odaberi centar: </label>
      
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="427" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
       427 Jankomir
      </label>
      </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
      <label class="form-check-label" for="flexCheckDefault">
      424 Žitnjak
    </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
      <label class="form-check-label" for="flexCheckDefault">
      414 Osijek
    </label>
  </div>
 </div>
  <button type="submit" class="btn btn-primary">Prikaži</button>
</form>

@endsection
