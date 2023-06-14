<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_depart',
        'date_fin',
        'heure_depart',
        "heure_arrivage",
        "num",
        "type",
        "n_place",
        "prix_achat",
        "prix_vente"
        
    ];
    public function Packs()
    {
        return $this->hasMany(Pack::class);
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
