<?php

namespace App\Http\Controllers;

use App\Models\Testing;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index()
    {
        $testings = Testing::with(['facility', 'equipment'])->get();
        return view('testing', compact('testings'));
    }

    public function show($slug)
    {
        $testing = Testing::with(['facility', 'equipment'])
            ->where('slug', $slug)
            ->firstOrFail();
        return view('testing-detail', compact('testing'));
    }
}
