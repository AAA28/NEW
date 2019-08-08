<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacie extends Model
{
    //
    protected $fillable = [
        'nom', 'situationgeo', 'Telephone','debut','fin','logo','pub','localisations_id',
    ];
    
    public function localisation(){
        return $this->belongsTo('App\Localisation');
    }
}
