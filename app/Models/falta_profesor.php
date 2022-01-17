<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faltas_profesores extends Model
{
    use HasFactory;
    protected $fillable = [
        'profesor_falta',
        'profesor_guardia',
        'periodoclase_id'
    ];
}
