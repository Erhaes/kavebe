<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Lab;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $infolab = Lab::first();
        $sertifikasis = Certificate::all();
        $hitungsertif = count($sertifikasis);
        $contacts = Contact::where('lab_id', $infolab->id)->get();
        
        return view('home',[
            'infolab' => $infolab, 
            'sertifikasis' => $sertifikasis, 
            'hitungsertif' => $hitungsertif,
            'contacts' => $contacts
        ]);
    }
}
