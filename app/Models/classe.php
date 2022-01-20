<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classe extends Model
{
    use HasFactory;
    
    protected $fillable[

        'codeclasse'
    ];


    public function classe_groupes()
    {
        return $this->hasMany(classe_groupe::class);
    }
}
