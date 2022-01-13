<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mission extends Model
{
    use HasFactory;
    $fillable=[
        'code_mission',
        'categorie_mission'


    ];
}
