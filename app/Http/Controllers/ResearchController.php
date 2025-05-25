<?php

namespace App\Http\Controllers;

use App\Models\Research;
use App\Models\ResearchTopic;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function index(Request $request)
    {
        $query = Research::with(['users', 'topics']);

        // Filter by year if provided
        if ($request->has('tahun') && $request->tahun) {
            $query->where('tahun', $request->tahun);
        }

        // Filter by topic if provided
        if ($request->has('topic') && $request->topic) {
            $query->whereHas('topics', function($q) use ($request) {
                $q->where('slug', $request->topic);
            });
        }

        // Search functionality
        if ($request->has('search') && $request->search) {
            $query->where(function($q) use ($request) {
                $q->where('judul', 'like', '%' . $request->search . '%')
                    ->orWhere('abstrak', 'like', '%' . $request->search . '%')
                    ->orWhereHas('users', function($q) use ($request) {
                        $q->where('name', 'like', '%' . $request->search . '%');
                    });
            });
        }

        $researches = $query->latest('tahun')->paginate(10);
        $topics = ResearchTopic::all();
        $years = Research::distinct()->orderBy('tahun', 'desc')->pluck('tahun');

        return view('research', compact('researches', 'topics', 'years'));
    }

    public function show($id)
    {
        $research = Research::with(['users', 'topics'])->findOrFail($id);
        return view('research-detail', compact('research'));
    }
} 