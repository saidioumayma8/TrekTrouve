<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class CommunityPostController extends Controller
{
    public function showTrail(post $post)
    {
        return view('post.index', compact('index'));
    }


    public function show($id)
    {
        $post = post::findOrFail($id);
        return view('post.index', compact('post'));
    }


    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'date' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
        } else {
            $imagePath = 'image\Jeph7HrGxhfS3iWrSliXqeQQJMY8L60aK4m0E9ML.jpg';
        }
        post::create([
            'title' => $request->title,
            'date' => $request->date,
            'content' => $request->content,
            'image' => $imagePath,
            'userid' => Auth::id(),
        ]);

        return redirect()->route('post.create')->with('success', 'Article created successfully!');
    }
    }

