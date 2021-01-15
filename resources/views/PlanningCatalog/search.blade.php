@section('content')

<table class="table table-striped mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Šifra centra</th>
      <th scope="col">Naziv centra</th>
      <th scope="col">Šifra artikla</th>
      <th scope="col">Naziv artikla</th>
      <th scope="col">TP</th>
      <th scope="col">PAL</th>
      <th scope="col">Kategorija</th>
      <th scope="col">Šifra dobavljača</th>
      <th scope="col">Dobavljač</th>
      <th scope="col">Vrsta akcije</th>
      <th scope="col">Prodana količina</th>
    </tr>
  </thead>
  <tbody>
   @foreach($centers->items() as $centers)
        <tr>
        <td>{{$centers->center_code}}</td>
        <td>{{$centers->center_name}}</td>
        </tr>
    @endforeach
  
    @foreach($articles->items() as $articles)
    
        <tr>
        <td>{{$articles->article_code}}</td>
        <td>{{$articles->article_name}}</td>
        <td>{{$articles->article_tp}}</td>
        <td>{{$articles->article_pal}}</td>
        <td>{{$articles->category}}</td>
        </tr>
    @endforeach

    @foreach($producers->items() as $producers)
        <tr>
        <td>{{$producers->producer_code}}</td>
        <td>{{$producers->producer_name}}</td>
        </tr>
    @endforeach
    @foreach($catalog_types->items() as $catalog_types)
        <tr>        
        <td>{{$catalog_types->catalog_type}}</td>        
        </tr>
    @endforeach


    </tbody>
  
</table>

@endsection