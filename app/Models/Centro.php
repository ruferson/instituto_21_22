<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Centro extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'web',
        'situacion',
        'coordinador',
        'verificado'
    ];

<<<<<<< HEAD
    public function user(){
        return $this->hasOne(User::class);
    }

    public function coordinadorCentro()
    {
=======
    public function user() {
>>>>>>> dd4f6ffaea26659a4dbccb8c93733a1cefe849ec
        return $this->belongsTo(User::class, 'coordinador');
    }
}
