<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    use HasFactory;
    protected $table = 'contactos';
    protected $fillable = ['tipo', 'descripcion', 'url', 'estado'];
    protected $with = ['notificaciones'];

    public function notificaciones()
    {
        return $this->hasMany(Notificaciones::class, 'contacto_id');
    }
}
