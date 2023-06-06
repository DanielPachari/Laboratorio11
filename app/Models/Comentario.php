<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentarios';

    public function User(){
        return $this->belongsTo(User::class);
    } 
    public function Mascotas(){
        return $this->belongsTo(Mascota::class);    
    }
    public function Fotos(){
        return $this->belongsTo(Foto::class);
    }
}
