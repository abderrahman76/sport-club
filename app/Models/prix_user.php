<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class prix_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'prix_id',
        'prix_code',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prix()
    {
        return $this->belongsTo(prix::class);
    }

}
