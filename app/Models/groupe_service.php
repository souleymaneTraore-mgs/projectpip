<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groupe_service extends Model
{
    use HasFactory;

    protected $fillable=[
    
        'code_groupeserv',
        'libelle_service'
    ];
}
