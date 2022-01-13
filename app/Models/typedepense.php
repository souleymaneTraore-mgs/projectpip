<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typedepense extends Model
{
    use HasFactory;

    $fillable =[

        'code_type_dep',
        'indentifiant_type_dep',
        'abreviation'

    ];
}
