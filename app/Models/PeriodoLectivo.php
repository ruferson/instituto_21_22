<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodoLectivo extends Model
{
    use HasFactory;

    protected $table = "periodos_lectivos";

    protected $fillable = [
        'dia',
        'hora_inicio',
        'hora_fin',
        'Anyoescolar_id'
    ];
}
