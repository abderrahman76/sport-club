<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avantage extends Model
{
    use HasFactory;
    protected $fillable = [
        'contenu',
    ];

    public function adhesion()
    {
        return $this->belongsToMany(adhesion::class);
    }
}
