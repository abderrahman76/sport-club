<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Adhesion;
use App\Models\User;



class CheckAdhesionEndtime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-adhesion-endtime';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check adhesion endtime and detach expired adhesions';

    /**
     * Execute the console command.
     */
    public function handle()
    {
     
        $users = User::with('adhesion')->get();

        foreach ($users as $user) {
            $adhesions = $user->adhesion;

            foreach ($adhesions as $adhesion) {
                if ($adhesion->pivot->enddate <= now()) {
                    $user->adhesion()->detach($adhesion->id); // Detach the expired adhesion from the user
                }
            }
        }
    }   
    }

