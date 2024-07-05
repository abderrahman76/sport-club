<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adhesion_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'adhesion_id',
        'user_id',
        'adhesion_code',
        'created_at',
        'updated_at',
        'endDate',
    ];

}
