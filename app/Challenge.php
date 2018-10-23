<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    protected $fillable = ['challenge_name', 'challenge_image'];

    public function exercices()
    {
        return $this->hasMany('App\Exercice', 'challenge_id', 'id');
    }
}
