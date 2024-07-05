<?php

namespace App\Http\Controllers;

use App\Models\Centre;
use Illuminate\Http\Request;

class CentreController extends Controller
{
    public function index()
    {
        $centres = Centre::all();
        $centresjson = $centres->toJson();
        return view('centres')->with('centres',$centres);
        // return response($centresjson);
    }
}
