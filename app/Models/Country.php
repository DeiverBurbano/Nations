<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";
    protected $primaryKey = "country_id";
    use HasFactory;

    public function region(){
        //belongsTo: Parametros
        // 1 modelo a relacionar
        // 2 la Fk del modelo relacionar actual
        return $this->belongsTo(region::class ,
                                'region_id' );
                                
    }
    public function idiomas(){
        //belongsToMany Parametros
        // 1 modelo relacionar
        // 2 la tabla pivote
        // 3 FK del modelo actual en el pivote
        // 4 FK del modelo a relacionar en el pivote

        return $this->belongsToMany(Language::class, 'country_languages', 
        'country_id', 'language_id');
    }
}
