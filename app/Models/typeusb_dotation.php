<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeusb_dotation extends Model
{
    use HasFactory;

    $fillable=[

        'code_usb_dot',
        'libelle_usb_dot'

    ];
}
