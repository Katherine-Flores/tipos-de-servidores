@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column me-5 h-50">
        <h1 class="mb-4 titulo-principal">Tipos de Servidores:</h1>
        <p>Explora el mundo de los servidores, desde sus diferentes tipos hasta la gestión de su memoria.</p>
        <a href="{{ route('login-form') }}" class="btn-primario mt-auto">Iniciar Sesión </a>
    </div>
    <img src="{{asset('img/servidor-de-datos.png')}}" class="imagen-ocultar"/>
@endsection
