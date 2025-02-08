@extends('layouts.app')

@section('content')
    <section class="servidor-detalle">
        <a href="{{ route('dashboard') }}" class="btn-back">
            <i class="fa-solid fa-arrow-left"></i> Volver
        </a>

        <div class="detalle-container">
            <!-- Información del Servidor -->
            <div class="detalle-info">
                <h1 class="titulo">{{ $servidor->nombre }}</h1>

                <div class="descripcion-card">
                    <h5><i class="fa-solid fa-align-left"></i> Descripción</h5>
                    <p>{{ $servidor->descripcion }}</p>
                </div>

                <div class="memoria-card">
                    <h5><i class="fa-solid fa-memory"></i> ¿Cómo administra su memoria?</h5>
                    <p>{{ $servidor->administracion_memoria }}</p>
                </div>
            </div>

            <!-- Video -->
            <div class="detalle-video">
                <h3>Video Explicativo</h3>
                @if(!empty($servidor->video_url))
                    <div class="video-container">
                        <iframe
                            src="{{ $servidor->video_url }}"
                            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                @else
                    <p class="no-video">No hay video disponible.</p>
                @endif
            </div>
        </div>
    </section>
@endsection
