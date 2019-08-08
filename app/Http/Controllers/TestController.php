<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Localisation;
class TestController extends Controller
{
    //
    public function index(){
        return view('acceuil');
    }
    public function create(){
        return view('form-localisation');
    }

    public function store(Request $request){
        //etape validation
        Localisation::create([
            'localisation'=>$request->get('localisation'),
        ]);
        return view('form-localisation');

    }
}
