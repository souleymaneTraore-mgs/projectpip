<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ministere extends Model
{
    use HasFactory;
    protected $fillable=[


        'code_ministere',
        'ilbelle_ministere',
        'tablesection_id'



    ];

    public function tablesections()
    {
        return $this->BelongsTo(tablesection::class);
    }
}
