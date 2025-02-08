@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('registro') }}" class="needs-validation w-50 row g-2" novalidate>
        @csrf
        <h3 class="mb-3">Registrarse</h3>
        <div class="mb-3 col-md-12">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
            <div class="invalid-feedback">
                El nombre es obligatorio.
            </div>
        </div>

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

        <button type="submit" class="btn-secundario mb-3">Registrar</button>

        <a href="{{ route('login-form') }}">¿Ya tienes una cuenta?</a>
    </form>
@endsection
