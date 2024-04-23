<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\trail;
use App\Models\excursion;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class trailController extends Controller

{
    public function index()
    {
        $excursions=excursion::all();
        $post=Post::all();
        return view('guide.index', compact('excursions', 'post'));

    }
    public function showTrail(excursion $excursion)
    {
        return view('guide.trail', compact('excursion'));
    }


    public function show($id)
    {
        $trail = trail::find($id);
        return view('guide.trail', compact('trail'));
    }

    public function reserve(Request $request,excursion $excursion)
    {

        $request->validate([
            'people' => 'required|integer|min:1',
        ]);

       $trail = Trail::where('excursion_id','=',$excursion->id)->first();
        Reservation::create([
            'user_id' => Auth::id(),
            'trail_id' => $trail->id,
            'excursion_id' => $excursion->id,
            'people' => $request->people,
        ]);

        return redirect()->back()->with('success', 'Reservation successfully created!');
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

        if ($request->hasFile('excursion_image')) {
            $imagePath = $request->file('excursion_image')->store('excursion_images', 'public');
        } else {
            $imagePath = 'excursion_images\Jeph7HrGxhfS3iWrSliXqeQQJMY8L60aK4m0E9ML.jpg';
        }

        $excursion = excursion::create([
            'title' => $request->excursion_name,
            'date' => $request->excursion_date,
            'description' => $request->excursion_text,
            'duration' => $request->excursion_duration,
            'location' => $request->excursion_location,
            'image' => $imagePath,
            'prix' => $request->excursion_prix,
            'user_id' => Auth::id(),

        ]);

        trail::create([
            'name' => $request->trail_name,
            'difficultylevel' => $request->trail_difficulty,
            'endpoint' => $request->trail_end_point,
            'startpoint' => $request->trail_start_point,
            'length' => $request->trail_length,
            'excursion_id' => $excursion->id,

        ]);


        return redirect()->route('guide.create')->with('success', 'Excursion and Trail created successfully!');
    }
}
