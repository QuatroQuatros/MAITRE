<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MesaReserva extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reserva_id',
        'mesa_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'reserva_id' => 'integer',
        'mesa_id' => 'integer',
    ];

    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }

    public function mesa()
    {
        return $this->belongsTo(\App\Models\Mesas::class);
    }
}
