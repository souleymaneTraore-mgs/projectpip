<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tablesection extends Model
{
    use HasFactory;

    protected $fillable=[

        'codesection',
        'libellesection',
        'abreviation'

    ];
}
