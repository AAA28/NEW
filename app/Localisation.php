<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localisation extends Model
{
    //
    protected $fillable = [
        'localisation',
    ];
    //une localisation hasMany pharmacie
    public function pharmacies(){
        return $this->hasMany('App\Pharmacie');
    }
}
