@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Reservas</h1>
        <div class="row">
            <div class="col-md-6">
                <!-- Tabla de reservas existentes -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Teléfono</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <th>Hora de Inicio</th>
                            <th>Hora de Fin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservas as $reserva)
                            <tr>
                                <td>{{ $reserva->id }}</td>
                                <td>{{ $reserva->nombre }}</td>
                                <td>{{ $reserva->apellido }}</td>
                                <td>{{ $reserva->telefono }}</td>
                                <td>{{ $reserva->descripcion }}</td>
                                <td>{{ $reserva->fecha }}</td>
                                <td>{{ $reserva->hora_inicio }}</td>
                                <td>{{ $reserva->hora_fin }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <!-- Formulario de creación de reservas -->
                @include('reservas.crear')
            </div>
        </div>
    </div>
@endsection
