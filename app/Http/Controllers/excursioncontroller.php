<?php

namespace App\Http\Controllers;

use App\Models\excursion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class excursionController extends Controller
{
    public function index()
    {
        $excursions = Excursion::all();
        return view('welcome', compact('excursions'));
    }

}
