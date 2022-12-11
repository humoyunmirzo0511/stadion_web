<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'narxi',
        'user_id',
        'viloyat',
        'tuman',
    ];


}
