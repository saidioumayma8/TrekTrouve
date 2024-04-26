<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\excursion;


class ReservationController extends Controller
{
    public function index()
    {
        // Get the current authenticated user
        $user = Auth::user();

        // Fetch reservations for the current user
        $reservations = Reservation::where('user_id', $user->id)->get();
        $excursions = Excursion::accepted()->get();

        // Pass reservations data to the view
        return view('admin.reservations.index', ['reservations' => $reservations, "excursions" => $excursions]);
    }
}
