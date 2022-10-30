<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;

class ReservationController extends Controller
{
    public function index(Reservation $reservation)
    {
    return $reservation->get();
    }
}
