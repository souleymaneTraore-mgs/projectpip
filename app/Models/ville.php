<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ville extends Model
{
    use HasFactory;
    protected $fillable[

        'code_ville',
        'libelle_ville'
    ];

}
