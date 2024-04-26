<?php

namespace App\Http\Controllers;

use App\Models\guide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class guideController extends Controller
{
    public function index()
{

    $guide = Auth::user();
    $excursions = $guide->excursion;
    return view('guide.excursions', compact('excursions', 'guide'));
}

}
