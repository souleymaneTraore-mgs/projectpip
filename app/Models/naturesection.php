<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class naturesection extends Model
{
    use HasFactory;
    protected $fillable=[
        'code_section',
        'nature_section',
        'abreviation'
    ];
}
