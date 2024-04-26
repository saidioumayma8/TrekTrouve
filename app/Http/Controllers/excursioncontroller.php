<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\excursion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class excursionController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $excursions = Excursion::accepted()->get();
        return view('welcome', compact('excursions', 'posts'));
    }
    public function editExcursion($id)
{
    $excursion = Excursion::findOrFail($id);
    return view('guide.edit', compact('excursion'));
}

public function updateExcursion(Request $request, $id)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'date' => 'required|date',
        'location' => 'required|string|max:255',
    ]);

    $excursion = Excursion::findOrFail($id);

    $excursion->title = $validatedData['title'];
    $excursion->description = $validatedData['description'];
    $excursion->date = $validatedData['date'];
    $excursion->location = $validatedData['location'];

    $excursion->save();

    return redirect()->route('guide.excursions')->with('success', 'Excursion updated successfully.');
}
public function deleteExcursion($id)
    {
        $excursion = Excursion::findOrFail($id);
        $excursion->delete();
        return redirect()->route('admin.excursions.index')->with('success', 'Excursion deleted successfully.');
    }
}
