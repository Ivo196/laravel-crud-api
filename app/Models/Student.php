<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student'; //Nombre del modelo

    protected $fillable = [ //Que campos puede ser alterados (una vez creado tengo que crear el controlador)
        'name',
        'email',
        'phone',
        'language'
    ]; 
}
