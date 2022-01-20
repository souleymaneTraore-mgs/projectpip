<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeservice extends Model
{
    use HasFactory;

    protected $table = 'typeservice';

    protected $fillable = [

        'codetypeservice',
        'libelletypeservice'
    ];
}
