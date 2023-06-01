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
