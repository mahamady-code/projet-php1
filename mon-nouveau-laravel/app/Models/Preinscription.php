<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preinscription extends Model
{
    protected $fillable = ['nom', 'prenom', 'email', 'telephone', 'diplome', 'fichier_joint', 'formation_id', 'message'];

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
}
