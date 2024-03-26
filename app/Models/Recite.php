<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recite extends Model
{
    use HasFactory;

    protected $fillable = [
        'juz',
        'juz_remaining',
        'page',
        'description'
    ];
}
