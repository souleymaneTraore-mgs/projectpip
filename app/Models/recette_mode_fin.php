<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recette_mode_fin extends Model
{
    use HasFactory;

    protected $table ='recette_mode_fin';

    protected $fillable = [

        'codefin',
        'libellefin',
        'sourcefinancement_id',
        'typefinancement_id'
    ];


    public function sourfin()
    {
        return $this->BelongsTo(sourcefinancement::class);
    }


    public function typefin()
    {
        return $this->BelongsTo(typefinancement::class);
    } 
}
