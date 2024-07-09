@extends('layouts.app')

@section('content')
    <div class="container">
        <style>
            .image-container {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: auto;
                width: 1100px;
                height: 300px;
                border: 5px solid green;
            }
        </style>

<div class="container">
        <div class="image-container" style="width: 1100px; height: 300px; display: flex; justify-content: center; align-items: center; margin: auto;">
            <img src="{{ asset('imagenes/rico culantro.jpg') }}" alt="Imagen de recepción" style="max-width: 100%; max-height: 100%; display: block;">
        </div>
    </div>


@endsection

