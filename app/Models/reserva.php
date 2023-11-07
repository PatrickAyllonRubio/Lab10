<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva extends Model
{
    use HasFactory;
    public function Pasajeros()
    {
        return $this->belongsTo(Pasajero::class);
    }
    public function Vuelos()
    {
        return $this->belongsTo(Vuelo::class);
    }
}
