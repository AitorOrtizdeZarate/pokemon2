@extends('layouts.app')

@section('content')
   <div id="fondo">
    <div class="d-flex justify-content-center" style="height: 850px;">
         <div class="col-6" style="margin-top: 10%;">
            <a href="#" class="btn btn-danger btn-lg btn-block border-white">Empezar</a>
        </div>
        <div class="col-6" style="margin-top: 10%;">
            <a href="{{route('pokemon')}}" class="btn btn-danger btn-lg btn-block border-white">Ver todos los Pokemon</a>
        </div>
     </div>
     </div>
@endsection