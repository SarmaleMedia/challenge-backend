<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = ['challenge_id', 'exercise_order', 'exercise_image', 'exercise_description'];
}
