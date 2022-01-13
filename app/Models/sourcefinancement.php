<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sourcefinancement extends Model
{
    use HasFactory;
    protected $fillable =[

        
        'code_sourcefin',
        'identifiant_source'

    ];
}
