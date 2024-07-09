<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['inicio']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function verDisponibilidad()
{
    // Get the reservas data from your model or database
    $reservas = Reserva::all();

    // Return the todas_reservas view with the reservas data
    return view('todas_reservas', compact('reservas'));
}
    /**
     * Show the inicio page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
}
