<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groupe extends Model
{
    use HasFactory;

    protected $fillable =[

        'codegroupe',
        'libellegroupe',
        'type_groupe_id',
        'division_id'
    ];


    public function type_groupes()

    {
        return $this->BelongsTo('App\Models\type_groupe');
    }


    public function divisions()

    {
        return $this->BelongsTo('App\Models\division');
    }


    public function classe_groupes()
    {
        return $this->hasMany(classe_groupe::class);
    }


    

}
