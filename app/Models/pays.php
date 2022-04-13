<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pays extends Model
{
    use HasFactory;

    protected $table= 'pays';

    protected $fillable=[

        'code_pays',
        'libelle_pays',
        'region_id'
    ];

    public function regions()
    {
        return $this->BelongsTo('App\Models\region');
    }

    public function villes()
    {
        return $this->hasMany('App\Models\ville');
    }



}
