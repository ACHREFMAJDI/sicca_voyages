<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;
    protected $fillable = [
        "hotel_id",
        "n_place",
        "num",
        "date_debut",
        "date_fin",
        "prix_achat",
        "prix_vente",
        "num_etage"
    ];
    public function hotels()
    {
        return $this->belongTo(Hotel::class);
    }
    public function packs()
    {
        return $this->hasMany(Pack::class);
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
