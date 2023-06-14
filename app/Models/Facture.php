<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = [
        "client_id",
        "reservation_id",
        "total"
    ];
    public function clinets()
    {
        return $this->belongTo(Client::class);
    }
    public function reservations()
    {
        return $this->belongTo(Reservation::class);
    }
}
