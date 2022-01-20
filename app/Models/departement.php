<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departement extends Model
{
    use HasFactory;

    protected $table='departement';

    protected $fillable = [
        'code_departement',
        'libelle_departement',
        'ville_id'
    ];


    

    public function villes()
    {
        return $this->BelongsTo('App\Models\ville');
    }



    public function sousprefectures()
    {
        return $this->hasMany('App\Model\sous_prefecture');
    }
}
