<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = "regions";
    protected $primaryKey = "region_id";
    use HasFactory;

    public function continente(){
        //belongsTo: Parametros
        // 1 modelo a relacionar
        // 2 la Fk del modelo relacionar actual
        return $this->belongsTo(continent::class ,
                                'continent_id' );
    }

    //relación 1:M con country
    public function paises(){
        //hasMany: Parametros
        //1 Modelo a relacionar
        //FK del modelo actual en el modelo a relacionar
        return $this->hasMany(Country::class , 
                               'region_id' );
    }
}
