<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cubicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'merk',
        'supply_inc',
        'uraian'
    ];
}