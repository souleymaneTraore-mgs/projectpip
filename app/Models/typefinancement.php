<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typefinancement extends Model
{
    use HasFactory;
    protected $fillable=[

        'codetype_fin',
        'identifiant_type_fin',
        'abreviation'

    ];
}
