<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $table = 'fotos';

    public function User(){
        return $this->belongsTo(User::class);
    } 
    public function Comentarios(){
        return $this->belongsTo(Comentario::class);
    }
    public function Mascotas(){
        return $this->belongsTo(Mascota::class);
    } 
}

