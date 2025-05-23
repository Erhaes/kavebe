<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::all();

        return view('facilities', [
            'facilities' => $facilities
        ]);
    }

    public function show($slug)
    {
        $facility = Facility::with('equipments')->where('slug', $slug)->firstOrFail();
        
        return view('lablist', [
            'facility' => $facility,
            'equipments' => $facility->equipments
        ]);
    }
}
