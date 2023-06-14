<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    use HasFactory;
    protected $fillable = [
        "n_vol",
        "date_achat",
        "date_depart",
        "date_arrivée",
        "h_arrivage",
        "h_depart",
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
