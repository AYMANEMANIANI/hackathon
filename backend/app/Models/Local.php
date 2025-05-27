<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;
use App\Models\Categorie;
class Local extends Model
{
    /** @use HasFactory<\Database\Factories\LocalFactory> */
    use HasFactory;
        protected $fillable = ['type', 'capacite', 'prix', 'location'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
