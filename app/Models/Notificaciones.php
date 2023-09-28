<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificaciones extends Model
{
    use HasFactory;
    protected $table = 'notificaciones';
    protected $fillable = ['tipo', 'descripcion', 'url','estado'];

    public function contacto()
    {
        return $this->belongsTo(Contacto::class, 'contacto_id');
    }
}
