<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = ['libelle'];

    public function etudiants(): HasMany{
        return $this->hasMany(Etudiant::class);
    }
}
