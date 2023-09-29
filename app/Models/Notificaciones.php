<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificaciones extends Model
{
    use HasFactory;
    protected $table = 'notificaciones';
    protected $fillable = ['tipo', 'descripcion', 'url','estado'];
    protected $with = ['contacto'];

    public function contacto()
    {
        return $this->belongsTo(Contactos::class, 'contacto_id');
    }
}
