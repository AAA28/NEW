@extends('layouts.base')
@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <form action="{{route('storepharmacie')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" name="nom" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="situationgeo">Situation Geographique</label>
                <textarea class="form-control " name="situationgeo" ></textarea>
            </div>
    
    
            <div class="form-group">
                <label for="Tel">Telephone</label>
                <input type="text" name="Telephone" id="Telephone" class="form-control">
            </div>
    
            <div class="form-group">
                <label for="debut">Date debut de Garde</label>
                <input type="date" name="debut" id="debut" value="2011-08-01" class="form-control">
            </div>
            <div class="form-group">
                <label for="fin">Date debut de fin</label>
                <input type="date" name="fin" id="fin" value="2011-08-07" class="form-control">
            </div>
    










            <div class="form-group">
                <label for="logo">Logo</label>
               <input type="file" name="logo" id="logo" class="form-control-file">
            </div>
    



            
            <div class="form-group">
                <select class="custom-select" name="localisation" required>
                <option value="">Localisation</option>
                        @foreach ($local as $item)
                  <option value="{{$item->id}}">{{$item->localisation}}</option>
                        @endforeach
                </select>
              </div>




            <button type="submit" class="form-control">SEND</button>

        </form>
        </div>
    </div>
</div>
    
@endsection