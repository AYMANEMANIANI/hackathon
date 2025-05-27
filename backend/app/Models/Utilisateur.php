<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class Utilisateur extends Model
{
    /** @use HasFactory<\Database\Factories\UtilisateurFactory> */
    use HasFactory;
    protected $fillable = ['nom', 'email', 'mot_de_passe', 'qr_code'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
