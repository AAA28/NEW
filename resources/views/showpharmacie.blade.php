@extends('layouts.base')
@section('contenu')
<div class="container">
   
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
                <p>nombres de resultat est:{{$pharmacie->count()}} : {{$data}}</p>
       <table class="table table-bordered table-inverse table-responsive">
           
           <thead class="thead-inverse">
               <tr>
                   <th>Pharmacie</th>
                   <th>Situation Geographique</th>
               </tr>
           </thead>
          
             @foreach ($pharmacie as $item) 
           <tbody>
               <tr>
                   <td>
                   <a href="{{route('showdetails',$item->id)}}"> {{$item->nom}}</a>   
                </td>
                   <td>{{$item->situationgeo}}</td>
        
               </tr>
           </tbody>
                @endforeach
            
       </table>
       <div class="col-md-2"></div>
        </div> 
   


      
    </div>
</div>
    
@endsection