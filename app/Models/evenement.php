<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evenement extends Model
{
    protected $fillable = [
        'name',
        'image',
        'description',
        'date',
        'isPremium',
        'image',
        'maxParticipant',
        'centre_id',
        'points',
    ];
    use HasFactory;

    public function centre()
{
    return $this->belongsTo(Centre::class);
}

public function user()
    {
        return $this->belongsToMany(User::class, 'badge_evenements')->withPivot('user_code');
    }
}
