<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeusb_programme extends Model
{
    use HasFactory;

    $fillable=[

        'code_usb_prog',
        'libelle_usb_prog'

    ];
}
