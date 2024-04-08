<?php

namespace App\Http\Controllers;

use App\Models\trail;
use App\Models\excursion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExcursionController extends Controller
{
    public function create()
    {
        $trails = trail::all();
        $excursions = excursion::all();

        return view('guide.create', compact('trails', 'excursions'));
    }

    public function store(Request $request)
    {


      $gg=  $request->validate([
            'excursion_name' => 'required',
            'excursion_date' => 'required',
            'excursion_duration' => 'required',
            'excursion_location' => 'required',
            'excursion_text' => 'required',
            'excursion_difficulty' => 'required',
            'excursion_image' => 'required',
            'trail_name' => 'required',
            'trail_start_point' => 'required',
            'trail_end_point' => 'required',
            'trail_length' => 'required|numeric',

        ]);

        excursion::create([
            'title' => $request->excursion_name,
            'trail_id' => $request->trail_id,
            'date' => $request->excursion_date,
            'description' => $request->excursion_text,
            'difficultylevel' => $request->excursion_difficulty,
            'duration' => $request->excursion_duration,
            'image' => $request->excursion_image,
            'location' => $request->excursion_location,
            'user_id' => Auth::id(),
        ]);

        trail::create([
            'name' => $request->trail_name,
            'difficultylevel' => $request->trail_difficulty_level,
            'endpoint' => $request->trail_endpoint,
            'startpoint' => $request->trail_startpoint,
            'length' => $request->trail_length,
        ]);

        return redirect()->route('guide.create')->with('success', 'Excursion and Trail created successfully!');
    }
}
