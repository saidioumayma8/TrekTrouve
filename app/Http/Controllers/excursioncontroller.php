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
        $post = Post::all();
        $excursions = Excursion::accepted()->get();
        return view('welcome', compact('excursions', 'post'));
    }

}
