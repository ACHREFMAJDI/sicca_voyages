<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        "date_reservation",
        "id_vol",
        "id_chambre",
        "id_transport",
        "id_service",
        "user_id",
    ];
    public function factures()
    {
        return $this->hasMany(Facture::class);
    }
    public function vols()
    {
        return $this->belongTo(Vol::class);
    }
    public function Chambres()
    {
        return $this->belongTo(Chambre::class);
    }
    public function transports()
    {
        return $this->belongTo(Transport::class);
    }
    public function services()
    {
        return $this->belongTo(Service::class);
    }
    public function users()
    {
        return $this->belongTo(User::class);
    }
}