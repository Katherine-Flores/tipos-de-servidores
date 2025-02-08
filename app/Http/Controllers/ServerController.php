<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    // Obtener todos los servidores
    public function index(Request $request)
    {
        $servidores = Server::all();

        if ($request->has('test')) {
            return response()->json($servidores);
        }

        return view('servidores.servidores', compact('servidores'));
    }

    // Obtener servidor por id
    public function show(Request $request, $id)
    {
        $servidor = Server::find($id);

        if (!$servidor) {
            return response()->json(['message' => 'Servidor no encontrado'], 404);
        }

        // Transformar la URL de YouTube en formato embebido
        if (!empty($servidor->video_url)) {
            if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]+)/', $servidor->video_url, $matches)) {
                // Si es un enlace corto (youtu.be)
                $servidor->video_url = "https://www.youtube.com/embed/{$matches[1]}";
            } elseif (preg_match('/watch\?v=([a-zA-Z0-9_-]+)/', $servidor->video_url, $matches)) {
                // Si es un enlace largo (youtube.com/watch?v=)
                $servidor->video_url = "https://www.youtube.com/embed/{$matches[1]}";
            }
        }

        // Si en la URL hay ?test=1, devuelve JSON para Postman
        if ($request->has('test')) {
            return response()->json([
                'status' => 'success',
                'data' => $servidor
            ]);
        }

        // Si no hay ?test=1, devuelve una vista Blade
        return view('servidores.servidor', compact('servidor'));
    }

    public function dashboard()
    {
        $servidores = Server::all();
        return view('dashboard', compact('servidores'));
    }
}
