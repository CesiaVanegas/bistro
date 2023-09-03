<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bebidas extends Model
{
    use HasFactory;
    protected $table ='bebidas';
    protected $fillable = ['nombre', 'precio', 'tipo','imagen','estado'];
}
