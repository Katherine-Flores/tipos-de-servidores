<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;

    protected $table = 'servidores';
    protected $fillable = ['nombre', 'descripcion', 'imagen_url', 'video_url', 'administracion_memoria'];
}
