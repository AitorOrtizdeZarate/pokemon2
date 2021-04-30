@extends('layouts.app')

@section('content')
   <div class="row mx-2 my-2">
   @foreach($pokemons as $pokemon)
    <div class="col-1 mx-2">
       <div class="card" style="width: 10rem; height: 250px">
          <img class="card-img-top" src="{{$pokemon->imagen}}" alt="Card image cap" style="height: 125px;">
          <div class="card-body">
            <p>{{$pokemon->id}}</p>
            <h5 class="card-title">{{$pokemon->nombre}}</h5>
          </div>
        </div>
    </div>
   @endforeach
</div>
@endsection