<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        "hnom",
        "etoile",
        "site",
        "email",
        "tel"
    ];
    public function Chambres () {
        return $this->hasMany( Chambre::class );
    }
}
