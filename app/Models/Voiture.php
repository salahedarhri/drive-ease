<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable = [
        'marqueVoiture',
        'modeleVoiture',
        'anneeVoiture',
        'prixVoiture',
        'nbSieges',
        'descriptionVoiture'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
