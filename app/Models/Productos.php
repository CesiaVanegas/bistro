<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table ='productos';
    protected $fillable = ['nombre', 'precio', 'descripcion'];

}

// php artisan make:model Productos => para crear modelo 