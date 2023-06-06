<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promocion extends Model
{
    use HasFactory;

    protected $table = 'promocion';

    public function User(){
        return $this->belongsTo(User::class);
    } 
    public function Mascotas(){
        return $this->belongsTo(Mascota::class);
    }
}
