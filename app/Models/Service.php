<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'discription',
        'prix',
        
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
