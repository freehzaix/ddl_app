<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'classe_id'
    ];

    public function classe(): BelongsTo{
        return $this->belongsTo(Classe::class, 'classe_id');
    }
}
