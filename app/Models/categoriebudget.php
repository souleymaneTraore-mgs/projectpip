<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoriebudget extends Model
{
    use HasFactory;
    $fillable=[

        'code_buget',
        'libelle_budget'


    ];
}
