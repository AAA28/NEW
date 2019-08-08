<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacie;
use App\Localisation;
class PharmacieController extends Controller
{
    //formulaire pharmacie
    public function create(){
        //on recupere les localisations
        $local=Localisation::get();
        return view('form-pharmacie',compact('local'));
    }
    //enregistrement de pharmacie
    public function store(Request $request){
        //partie de validation

        //gestion des images
        if($request->hasFile('logo')){
            $file=$request->file('logo');//nom de l'image
            $extension=$file->getClientOriginalExtension();//je recupere l'extension
            //  $filename=time() . '.' . $extension;
            $filename=$request->nom . '.' . $extension;
             $file->move('Image/pharmacie/logo',$filename);//on deplace le filename dans Image/pharmaciee/logo
            $logo=$filename;
         }else{
             return $request;
             $logo='';
         }
        
        
        Pharmacie::create([
            'nom'=>$request->nom,
            'situationgeo'=>$request->situationgeo,
            'Telephone'=>$request->Telephone,
            'debut'=>$request->debut,
            'fin'=>$request->fin,
            'localisations_id'=>$request->localisation,
            'logo'=>$logo,

        ]);


        return view('acceuil');
    }

    //show les pharmacies par commune
    public function showall(){
        $localisation=Localisation::get();
        return view('pharmacie-garde',compact('localisation'));
    }
    public function showliste($data,$id){
        $pharmacie=Pharmacie::where('localisations_id',$id)->get();
        return view('showpharmacie',compact('pharmacie','data'));
    }
    public function showdetails($id){
        $detail=Pharmacie::find($id);
        return view('pharmacie-detail',compact('detail'));
    }
}
