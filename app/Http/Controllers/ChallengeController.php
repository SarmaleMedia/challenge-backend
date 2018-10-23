<?php

namespace App\Http\Controllers;

use App\Challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function getAllChallenges()
    {
        return response()->json(Challenge::all());
    }
}
