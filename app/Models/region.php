<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class region extends Model
{
    use HasFactory;


    protected $fillable = [
        'code_region',
        'libelle_region',
        'zone_id'
    ];


    protected $table ='region';

    
    public function zones()
    {
        return $this->BelongsTo('App\Models\zone');
    }


    public function payss()
    {
        return $this->hasMany('App\Model\pays');
    }

}
