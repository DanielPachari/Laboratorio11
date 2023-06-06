<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $table = 'mascota';

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Comentarios(){
        return $this->belongsTo(Comentario::class);
    }
    public function Fotos(){
        return $this->belongsTo(Foto::class);
    }
    public function Promociones(){
        return $this->belongsTo(promocion::class);
    }
}
