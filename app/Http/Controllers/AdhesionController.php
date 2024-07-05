<?php

namespace App\Http\Controllers;

use App\Models\adhesion;
use App\Models\sport;
use Illuminate\Http\Request;

class AdhesionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $adhesions = $user->adhesion;
        $adhesionjson =$adhesions->tojson();
        // dd($adhesions);
        return view('myadhesion')->with('adhesions', $adhesions);
        // return response($adhesionjson);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function session(adhesion $adhesion)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $sport = $adhesion->sport;
        $tow ="00";
         $total= $adhesion->prix . $tow;
        // dd($adhesion);
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $adhesion->name,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],
                 
            ],
            'metadata' => [
                'product_id' => $adhesion->subcode,
                // Add any additional metadata fields as needed
            ],
            'mode'        => 'payment',
            'success_url' => route('success',[$adhesion->id]),
            'cancel_url'  => route('sport',[$sport]),
        ]);
 
        return redirect()->away($session->url);
    }
 
    

     /**
     * Show the form for creating a new resource.
     */
    public function upgrade( adhesion $adhesion)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
       
        $sport = $adhesion->sport;
        $user = auth()->user();
        $currentAdhesion = $user->adhesion()
        ->where('sport_id', $sport->id)
        ->first();
        // dd($currentAdhesion) ;
        $tow ="00";
        if ($currentAdhesion->prix < $adhesion->prix) {
            $prix = $adhesion->prix -$currentAdhesion->prix;
        }
            else{
                $prix = 1;
        }
         $total= $prix . $tow;
        // dd($adhesion);
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $adhesion->name,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],
                 
            ],
            'metadata' => [
                'product_id' => $adhesion->subcode,
            ],
            'mode'        => 'payment',
            'success_url' => route('success2',[$adhesion->id]),
            'cancel_url'  => route('sport',[$sport]),
        ]);
 
        return redirect()->away($session->url);
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
    public function show(adhesion $adhesion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function cancel(sport $sport)
    {
        $user= auth()->user();
        $user->adhesion()->where('sport_id', $sport->id)->detach();
        return redirect()->back()->with('success', 'subscription canceled !.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, adhesion $adhesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(adhesion $adhesion)
    {
        //
    }

    public function success($id)
{
    $user = auth()->user();
    $adhesion = Adhesion::find($id);
    $sport = $adhesion->sport;
    $adhesionCode = fake()->unique()->bothify('???-########');
    $endDate = now()->addDays(30);

    // Detach the existing adhesion related to the sport
    $user->adhesion()->where('sport_id', $sport->id)->detach();

    // Attach the new adhesion with the end date
    $user->adhesion()->attach($adhesion->id, [
        'adhesion_code' => $adhesionCode,
        'endDate' => $endDate
    ]);

            $user->point += $adhesion->points;
           
            $user->save();

    return redirect()->route('sport', [$sport])->with('success', 'subscribed successfully!');
}

public function success2($id)
{
    $user = auth()->user();
    $adhesion = Adhesion::find($id);
    $sport = $adhesion->sport;
    $adhesionCode = fake()->unique()->bothify('???-########');
    $oldAdhesion = $user->adhesion()->where('sport_id', $sport->id)->first();
    $endDate = $oldAdhesion->pivot->endDate;

    // Detach the existing adhesion related to the sport
    $user->adhesion()->where('sport_id', $sport->id)->detach();

    // Attach the new adhesion with the old end date
    $user->adhesion()->attach($adhesion->id, [
        'adhesion_code' => $adhesionCode,
        'endDate' => $endDate
    ]);

    return redirect()->route('sport', [$sport])->with('success', 'subscription updated successfully!');
}

}
