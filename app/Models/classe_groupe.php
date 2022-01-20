<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classe_groupe extends Model
{
    use HasFactory;

    protected $table = 'classe_groupe';

    protected $fillable = [

        'code_grp_classe',
        'libelle_grp_classe',
        'groupe_id',
        'classe_id'
    ];


    public function groupes()
    {
        return $this->BelongTo(groupe::class);
    }

    public fuction classes()
    {
        return $this->BelongsTo(classe::class);
    }
}
