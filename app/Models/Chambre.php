<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_hotel',
        'num_chambre',
        'date_debut',
        'date_fin',
        'prix',
        'num_etage',
        'double_or_single'
    ];
    public function hotels()
    {
        return $this->belongTo(Hotel::class);
    }
    public function packs()
    {
        return $this->belongTo(Pack::class);
    }
    public function reservations()
    {
        return $this->belongTo(Reservation::class);
    }
}
