<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Utilisateur;
use App\Models\Local;
use App\Models\Facture;

class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;
        protected $fillable = ['date', 'heure', 'duree', 'utilisateur_id', 'local_id'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    public function local()
    {
        return $this->belongsTo(Local::class);
    }

    public function factures()
    {
        return $this->hasOne(Facture::class);
    }
}
