<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ville extends Model
{
    use HasFactory;
    protected $fillable[

        'code_ville',
        'libelle_ville',
        'pays_id'
    ];


    public function payss()
    {
        return $this->BelongTo('App\Model\pays');
    }


    public function departements()
    {
        return $this->hasMany('App\Model\departement');
    }




}
