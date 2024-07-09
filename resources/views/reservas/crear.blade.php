@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Reserva</h1>
        <form action="{{ route('reservas.almacenar') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha de llegada:</label>
                <input type="date" id="fecha" name="fecha" class="form-control" required min="{{ date('Y-m-d') }}">
            </div>
            <div class="form-group">
                <label for="hora_inicio">Hora de Inicio:</label>
                <input type="time" id="hora_inicio" name="hora_inicio" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="hora_fin">Hora de Fin:</label>
                <input type="time" id="hora_fin" name="hora_fin" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Crear Reserva</button>
        </form>
    </div>
@endsection

