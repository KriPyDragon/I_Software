
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <!-- Dashboard lado izquierdo -->
                <div class="card col-md-12" style="height: 85vh; position: sticky; top: 0;">
    <div class="card-body">
        <ul class="nav flex-column">
            <li class="nav-item">
                <button class="btn btn-primary btn-block">Ver disponibilidad</button>
            </li>
        </ul>
    </div>
</div>

            </div>
            <div class="col-md-10">
                <!-- Contenido adicional -->
                <p></p>
            </div>
        </div>
    </div>
@endsection