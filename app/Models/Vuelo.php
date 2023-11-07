<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vuelo extends Model
{
    use HasFactory;
    public function Pasajeros()
        {
            return $this->belongsToMany(Vuelo::class, 'vuelos_pasajeros', 'vuelos_id', 'pasajeros_id');
                }
    public function Reservas()
        {
            return $this->hasMany(Reserva::class);
        }
}
