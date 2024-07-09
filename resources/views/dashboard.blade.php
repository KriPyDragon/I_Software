@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!-- Barra lateral con botones -->
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('mesas.index') }}">Ver Mesas</a></li>
                <!-- Agrega más enlaces según sea necesario -->
            </ul>
        </div>
        <div class="col-md-9">
            <!-- Contenido principal del dashboard -->
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You are logged in.
                    <!-- Contenido adicional del dashboard -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
