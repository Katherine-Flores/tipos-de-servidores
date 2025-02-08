@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('login') }}" class="needs-validation w-50 row g-2" novalidate>
        @csrf
        <div class="mb-3 col-md-6">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            <div class="invalid-feedback">
                Por favor, ingresa un correo válido.
            </div>
        </div>

        <div class="mb-3 col-md-6">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
            <div class="invalid-feedback">
                La contraseña es obligatoria.
            </div>
        </div>

        <button type="submit" class="btn-secundario mb-3">Iniciar sesión</button>

        <div class="division">o</div>

        <a href="{{ route('registro-form') }}" class="btn-terciario">Registrarse</a>
    </form>
@endsection
