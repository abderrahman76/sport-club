<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    protected $fillable = [
        'name',
        'location',
        'time',
        'description',
        'image',
    ];
    use HasFactory;

    public function sports()
{
    return $this->belongsToMany(Sport::class);
}
}
