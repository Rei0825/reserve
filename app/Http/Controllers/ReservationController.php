<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;

class ReservationController extends Controller
{
    public function reception(Reservation $reservation)
    {
       return view('reservation/customer_reservation')->with(['reservation' => $reservation->get()]);  
    }
    
    public function information(Reservation $reservation)
    {
       return view('reservation/personal_information')->with(['reservation' => $reservation->get()]);  
    }
}
?>