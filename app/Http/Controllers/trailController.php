<?php

namespace App\Http\Controllers;

use App\Models\trail;
use Illuminate\Http\Request;

class trailController extends Controller
{
    public function create()
    {
        return view('trails.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'trail_name' => 'required',
            'trail_difficulty_level' => 'required',
            'trail_endpoint' => 'required',
            'trail_startpoint' => 'required',
            'trail_length' => 'required|numeric',
            // Add validation rules for other fields as needed
        ]);

        trail::create([
            'name' => $request->trail_name,
            'difficulty_level' => $request->trail_difficulty_level,
            'endpoint' => $request->trail_endpoint,
            'startpoint' => $request->trail_startpoint,
            'length' => $request->trail_length,
            // Add other fields here
        ]);

        return redirect()->route('trails.index')->with('success', 'Trail created successfully!');
    }
}
