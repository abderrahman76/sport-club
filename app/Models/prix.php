<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class prix extends Model
{
    protected $fillable = [
        'name',
        'image',
        'pointsRequired',
    ];
    use HasFactory;
}
