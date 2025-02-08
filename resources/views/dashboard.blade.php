@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column my-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @include('servidores.servidores', ['servidores' => $servidores])
        </div>
    </div>
@endsection
