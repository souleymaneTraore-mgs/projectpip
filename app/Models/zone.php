<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class zone extends Model
{
    use HasFactory;


    protected $fillable [
        'codezone',
        'libelle_zone'
    ];

    protected $table ='zone';
    
    public function regions()
    {
        return $this->hasMany('App\Model\region');
    }
}
