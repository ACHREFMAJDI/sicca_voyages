<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        "description",
        "prix_achat",
        "prix_vente",
        "qte"
        
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
