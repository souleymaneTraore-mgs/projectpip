<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicegroupe extends Model
{
    use HasFactory;

    protected $table = 'servicegroupe';

    protected $fillable = [

        'codeservicegroupe',
        'libelle_servicegroupe',
        'typeservice_id',
        'numerogroupe_id'

    ];


    public function typeservices()
    {
        return $this->BelongsTo(typeservice::class);
    }


    public function numerogroupes()
    {
        return $this->BelongsTo(numerogroupe::class);
    }

}
