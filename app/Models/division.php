<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class division extends Model
{
    use HasFactory;
    protected $fillable=[

        'codedivision',
        'libelledivision'

    ];


    public function groupes()

    {
        return $this->hasMany('App\Models\groupe');
    }
}
