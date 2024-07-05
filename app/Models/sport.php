<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sport extends Model
{

    protected $fillable = [
        'name',
        'image',
        'description',
        'schedule',
    ];
    use HasFactory;

    public function centres()
{
    return $this->belongsToMany(Centre::class);
}
public function adhesions()
{
    return $this->hasMany(Adhesion::class);
}

}
