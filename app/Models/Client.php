<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "prenom",
        "cin",
        "passeport",
        "email",
        "tel"
    ];
    public function factures()
    {
        return $this->hasMany(Facture::class);
    }
    public function users()
    {
        return $this->belongTo(User::class);
    }
    
}
