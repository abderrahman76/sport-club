<?php

namespace App\Http\Controllers;

use App\Models\prix;
use App\Models\prix_user;
use App\Models\User;

use Illuminate\Http\Request;

class PrixController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prixs = prix::all();
        $prixjson = $prixs->toJson();
        return view('rewards')->with('prixs', $prixs); 
        // return response()->json($prixjson);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $prix = Prix::find($id);
        $user = auth()->user();
        $prixCode = fake()->unique()->bothify('???-########');
        
        // Check if the user has enough points
        if ($user->point >= $prix->pointsRequired) {
            // Attach the prix to the user
            $user->prix()->attach($prix->id, ['prix_code' => $prixCode]);
            
            // Update the user's remaining points
            $user->point -= $prix->pointsRequired;
            $user->save();
            
            // Redirect to the same page with success message
            return redirect()->back()->with('success', 'Reward claimed successfully!');
        } else {
            // Redirect to the same page with error message
            return redirect()->back()->with('error', 'Insufficient points to claim the reward.');
        }
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = auth()->user();

       $prixs = $user->prix()->get();
       $prixjson = $prixs->toJson();


       return view('myrewards')->with('prixs',$prixs);
    //    return response($prixjson);

       
    }
    public function showadmin()
    {
       $prixs = prix_user::all();
       $prixjson = $prixs->toJson();


       return view('allrewards')->with('prixs',$prixs);
    // return response($prixjson);
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function claim(prix_user $prix)
    {
        
        $prix->delete();
        return redirect()->back()->with('success', 'Reward claimed successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, prix $prix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prix $prix)
    {
        //
    }


    function search(Request $request) {
       
        $prixUsers = Prix_user::where('prix_code', $request->search)->get();

        if ( $prixUsers->isEmpty()) {
            $prixUsers  = Prix_user::all();
            return view('allrewards')->with([
                'prixs' => $prixUsers,
                'error'  => "no rewards found !",
            ]);

     }else{
    
        return view('allrewards')->with('prixs',$prixUsers);
    }
    }
}


