<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class falta_profesor extends Model
{
    use HasFactory;
    protected $fillable = [
        'profesor_falta',
        'profesor_guardia',
        'periodoclase_id'
    ];
}
