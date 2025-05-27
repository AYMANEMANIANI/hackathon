<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class Facture extends Model
{
    /** @use HasFactory<\Database\Factories\FactureFactory> */
    use HasFactory;
    protected $fillable = ['montant', 'date_creation', 'status', 'reservation_id'];


    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
