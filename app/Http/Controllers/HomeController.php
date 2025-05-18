<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Lab;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $infolab = Lab::first();
        $sertifikasis = Certificate::all();
        $hitungsertif = count($sertifikasis);
        return view('home',['infolab'=>$infolab, 'sertifikasis' => $sertifikasis, 'hitungsertif'=>$hitungsertif]);
    }
}
