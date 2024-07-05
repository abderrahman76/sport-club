<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Cashier\Subscription as CashierSubscription;

use Illuminate\Database\Eloquent\Model;

class adhesion extends Model 
{
    use HasFactory;
    protected $fillable = [
        'sport_id',
        'name',
        'subcode',
        'isOffre',
        'prix',
        'points',
    ];


    public function sport()
    {
        return $this->belongsTo(sport::class);
    }

    public function avantage()
    {
        return $this->belongsToMany(avantage::class);
    }
    public function user()
    {
        return $this->belongsToMany(User::class, 'adhesion_users')->withPivot('adhesion_code', 'endDate');
    }
}
