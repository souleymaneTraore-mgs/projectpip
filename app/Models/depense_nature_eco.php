<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class depense_nature_eco extends Model
{
    use HasFactory;

    $fillable =[

        'classe',
        'article',
        'paragraphe',
        'ligne',
        'rubrique',
        'sous_rubrique',
        'libelle_nature_eco'
    ];

    
}
