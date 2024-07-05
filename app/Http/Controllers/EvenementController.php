<?php

namespace App\Http\Controllers;

use App\Models\evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = evenement::all();
        $jsons = $events->toJson();
         return view('events')->with('events',$events);
        // return response()->json($jsons);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $event = evenement::find($id);
        
// dd($event->maxParticipant);
        if ($event->maxParticipant > 0  && auth()->check() ) {

            $user = auth()->user();
            $hasBadge = $user->event()->where('evenement_id', $event->id)->exists();
            //  dd($hasBadge);


        $user_Code = fake()->unique()->bothify('???-########');
            // Attach the prix to the user
            $user->event()->attach($event->id, ['user_code' => $user_Code]);
            
            // Update the user's remaining points
            $user->point += $event->points;
            $event->maxParticipant -= 1;
            $event->save();
            $user->save();

            
            // Redirect to the same page with success message
            return redirect()->back()->with('success', 'Registered successfully!');
        } else {
            // Redirect to the same page with error message
            return redirect()->back()->with('error', 'unavilabel event.');
        }
    }
    
      
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = auth()->user();
        $badges = $user->event;
        $badgesjson = $badges->tojson();
        // dd($badges->first()->pivot->user_code);
        return view('mybadges')->with(['badges' => $badges, 'user' => $user]);
        // return response()->json($badgesjson);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(evenement $evenement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, evenement $evenement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(evenement $evenement)
    {
        //
    }
}
