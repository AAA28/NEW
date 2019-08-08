@extends('layouts.base')
@section('banniere')
    
@endsection
@section('contenu')
<div class="container">
    <div class="row">
        @foreach ($localisation as $item)
        <div class="col-md-2">
        <a href="{{route('showliste',[$item->localisation,$item->id])}}">  {{$item->localisation}}</a> 
        </div>
        @endforeach
        
    </div>
</div>
    
@endsection