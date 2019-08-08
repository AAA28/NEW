@extends('layouts.base')
@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <form action="{{route('storelocalisation')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="localisation"> Localisation</label>
              <input type="text" name="localisation" id="" class="form-control">
            </div>
            
            <button type="submit" class="form-control">SEND</button>

        </form>
        </div>
    </div>
</div>
    
@endsection