<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Team;
use App\Models\Introduction;
use App\Models\Position;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $lab = Lab::first();
        $teams = Team::with(['position', 'user'])->get();
        $introduction = Introduction::with('team')->first();
        
        return view('profile', [
            'lab' => $lab,
            'teams' => $teams,
            'introduction' => $introduction,
        ]);
    }
}
