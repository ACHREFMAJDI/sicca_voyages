<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;
    protected $fillable = [
        "date_debut",
        "date_fin",
        "description",
        "destination",
        "prix"
    ];
    public function Chambres() 
    {
        return $this->belongTo( Chambre::class );
    }
    public function vols() 
    {
        return $this->belongTo( Vol::class );
    }
    public function transports() 
    {
        return $this->belongTo( Transport::class );
    }
    public function services() 
    {
        return $this->belongTo( Service::class );
    }
}
