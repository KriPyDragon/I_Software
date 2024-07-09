<?php
// app/Http/Controllers/ReservaController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::all();
        return view('reservas.index', compact('reservas'));
    }

    public function crear()
    {
        return view('reservas.crear');
    }

    public function almacenar(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'descripcion' => 'nullable|string',
        ]);

        $reservasEnHora = Reserva::where('fecha', $request->fecha)
        ->where('hora_inicio', $request->hora_inicio)
        ->count();

    if ($reservasEnHora >= 13) {
        return redirect()->back()->withErrors(['error' => 'No se pueden hacer más de 13 reservas para esta hora.']);
    }
        Reserva::create([
            'fecha' => $request->fecha,
            'hora_inicio' => $request->hora_inicio,
            'hora_fin' => $request->hora_fin,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('reservas.index')->with('success', 'Reserva creada exitosamente.');
    }
    public function todas()
    {
 
        $reservas = Reserva::orderBy('fecha')->orderBy('hora_inicio')->get();

        return view('todas_reservas', compact('reservas'));
    }
}
