<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sourcedepense extends Model
{
    use HasFactory;

    protected $table='sourcedepense';
    protected $fillable=[

        'code_source_dep',
        'identifiant_dep'
    ];
}
