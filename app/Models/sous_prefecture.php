<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sous_prefecture extends Model
{
    use HasFactory;

    protected $fillable = [

        'code_sp',
        'libelle_sp',
        'departement_id'
    ];



    public function sousprefectures()
    {
        return $this->BelongsTo('App\Models\departement');
    }

}
