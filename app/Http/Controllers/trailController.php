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
        return view('guide.trail', compact('trail'));
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
            'excursion_prix' => 'required',
        ]);

        $trail = trail::create([
            'name' => $request->trail_name,
            'difficultylevel' => $request->trail_difficulty,
            'endpoint' => $request->trail_end_point,
            'startpoint' => $request->trail_start_point,
            'length' => $request->trail_length,
        ]);

        if ($request->hasFile('excursion_image')) {
            $imagePath = $request->file('excursion_image')->store('excursion_images', 'public');
        } else {
            $imagePath = 'excursion_images\Jeph7HrGxhfS3iWrSliXqeQQJMY8L60aK4m0E9ML.jpg';
        }

        excursion::create([
            'title' => $request->excursion_name,
            'date' => $request->excursion_date,
            'description' => $request->excursion_text,
            'duration' => $request->excursion_duration,
            'location' => $request->excursion_location,
            'image' => $imagePath,
            'prix' => $request->excursion_prix,
            'trail_id' => $trail->id,
            'user_id' => Auth::id(),

        ]);

        return redirect()->route('guide.create')->with('success', 'Excursion and Trail created successfully!');
    }
}
