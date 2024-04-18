<?php

namespace App\Http\Controllers;

use App\Models\excursion;
use App\Models\trail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class trailController extends Controller
{
    public function showTrail(trail $trail)
    {
        return view('guide.trail', compact('trail'));
    }


    public function show($id)
    {
        $trail = trail::find($id);
        return view('trail.show', compact('trail'));
    }

    public function create()
    {
        return view('guide.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'trail_name' => 'required',
            'trail_end_point' => 'required',
            'trail_start_point' => 'required',
            'trail_difficulty' => 'required',
            'trail_length' => 'required',
            'excursion_name' => 'required',
            'excursion_date' => 'required',
            'excursion_text' => 'required',
            'excursion_duration' => 'required',
            'excursion_location' => 'required',
            'excursion_image' => 'required',
        ]);

        $trail = trail::create([
            'name' => $request->trail_name,
            'difficultylevel' => $request->trail_difficulty,
            'endpoint' => $request->trail_end_point,
            'startpoint' => $request->trail_start_point,
            'length' => $request->trail_length,
            // Add other fields here
        ]);
        excursion::create([
            'title' => $request->excursion_name,
            'date' => $request->excursion_date,
            'description' => $request->excursion_text,
            'duration' => $request->excursion_duration,
            'location' => $request->excursion_location,
            'image' => $request->excursion_image,
            'trail_id' => $trail->id,
            'user_id' => Auth::id(),

            // Add other fields here
        ]);

        return redirect()->route('guide.create')->with('success', 'Excursion and Trail created successfully!');
    }
}
