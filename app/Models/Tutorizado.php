<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorizado extends Model
{
    use HasFactory;

    protected $fillable = [
        'tutorado',
        'tutor',
        'verificado',
        'verificationToken'
    ];
}
