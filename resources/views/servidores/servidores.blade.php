@if(isset($servidores) && count($servidores) > 0)
    <div class="container w-100">
        <div class="col">
            <h1>Tipos de Servidores</h1>
            <p>Existen diversos tipos de servidores, cada uno diseñado para cumplir funciones específicas dentro de una red. A continuación, se describen los más comunes:</p>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($servidores as $servidor)
                    <div class="col">
                        <a href="{{ route('servidor', ['id' => $servidor->id]) }}" class="servidor-card">
                            <div class="card servidor p-4">
                                <div class="icon-container">
                                    <img src="{{ $servidor->imagen_url }}" class="icon-img">
                                </div>

                                <h5 class="card-title fw-bold">{{ $servidor->nombre }}</h5>

                                <p class="card-text">{{ $servidor->descripcion }}</p>

                                <i class="fa-solid fa-arrow-right arrow-link"></i>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <h3 class="mt-5">Videos Recomendados</h3>
            <div class="container w-50">
                <div class="detalle-video">
                    <div class="video-container">
                        <iframe
                            src="https://www.youtube.com/embed/GxqXaRpIpWY"
                            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="video-container mt-4">
                        <iframe
                            src="https://www.youtube.com/embed/xV0mcCzDuew"
                            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <p>No hay servidores disponibles.</p>
@endif

