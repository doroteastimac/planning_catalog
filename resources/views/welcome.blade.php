@extends('layouts.app')

@section('content')
<style>
body {
  background-color: #E3E3E3;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: -5px;
}
</style>

<div class="jumbotron-5">
  <h1  class="display-4">Planning catalog</h1>
  <p class="lead">Aplikacija za pomoć pri planiranju kataloga.</p>
  <hr class="my-4">
    
</div>

<form>
  <div class="mb-3">
  
    <label for="article_code" class="form-label"><b>Šifra artikla</b></label>
    <input type="text" class="form-control" id="article_code" aria-describedby="article_code">
    <div id="article_code" class="form-text"></div>
  </div>   

  <div class="mb-3">  
    <label class="form-label"> <b>Odaberi centar:</b> </label>
      
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="427" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
      <b>407 Split</b>
      </label>
      </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
      <label class="form-check-label" for="flexCheckDefault">
      <b>408 Poreč</b>
    </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
      <label class="form-check-label" for="flexCheckDefault">
      <b> 413 Šibenik</b>
    </label>
  </div>

  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="427" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
      <b>414 Osijek</b>
      </label>
      </div>

  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="427" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
      <b> 415 Dubrovnik</b>
      </label>
      </div>

  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="427" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
      <b>416 Makarska</b>
      </label>
      </div>

      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="427" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
      <b>424 Žitnjak</b>
      </label>
      </div>

      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="427" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
      <b> 425 Rijeka</b>
      </label>
      </div>

      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="427" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
      <b>427 Jankomir</b>
      </label>
      </div>

      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="427" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
      <b>1057 Zadar</b>
      </label>
      </div>

      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="427" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
      <b>1059 Pula</b>
      </label>
      </div>

      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="427" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
      <b>1063 Varaždin</b>
      </label>
      </div>




 </div>

  <button type="submit" class="btn btn-primary">Prikaži</button>
</form>


@endsection
