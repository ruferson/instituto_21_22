<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriasImpartidas extends Model
{
    use HasFactory;
    protected $table = 'materia__impartidas';

    protected $fillable = [
        'docente',
        'grupo',
        'materia'
    ];
}
