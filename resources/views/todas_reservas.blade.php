@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Todas las Reservas</h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Hora de Inicio</th>
                            <th>Hora de Fin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservas as $reserva)
                            <tr>
                                <td>{{ $reserva->id }}</td>
                                <td>{{ $reserva->fecha }}</td>
                                <td>{{ $reserva->hora_inicio }}</td>
                                <td>{{ $reserva->hora_fin }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
