<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    use HasFactory;
    protected $fillable = [
        "n_vol",
        "depart",
        "distination",
        "date",
        "compagnie",
        
    ];
    public function Packs()
    {
        return $this->belongTo(Pack::class);
    }
    public function reservations()
    {
        return $this->belongTo(Reservation::class);
    }
}
