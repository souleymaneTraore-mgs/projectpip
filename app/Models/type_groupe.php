<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_groupe extends Model
{
    use HasFactory;

    protected $fillable = [

        'codeType_grp',
        'libelle_Type_grp'

    ];

    public function groupes()
    
    {
        return $this->hasMany('App\Models\groupe');
    }
}
