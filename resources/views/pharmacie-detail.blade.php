
@extends('layouts.base')
@section('contenu')
<div class="row">
    <div class="col-md-3">
            <img src="{{asset('Image/pharmacie/logo/'.$detail->logo)}}" class="img-responsive" alt="">
    </div>
    <div class="col-md-2">
            Pharmacie:{{$detail->nom}}
    </div>

    







    
@endsection