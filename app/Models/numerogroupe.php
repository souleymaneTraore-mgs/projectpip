<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class numerogroupe extends Model
{
    use HasFactory;


    protected $table = 'numerogroupe';


    protected $fillable = [

        'codenumgroup'
    ];


    public function servicegroupes()
    {
        return $this->hasMany(servicegroupe::class);
    }
}
