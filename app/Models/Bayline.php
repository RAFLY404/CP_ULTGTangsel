<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayline extends Model
{
    use HasFactory;

    protected $fillable = [
        'gardu_induk',
        'uraian',
        'KV'
    ];
}