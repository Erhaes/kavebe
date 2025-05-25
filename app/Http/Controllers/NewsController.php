<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = News::with(['newscategories', 'user']);

        // Filter by category if provided
        if ($request->has('category') && $request->category) {
            $query->whereHas('newscategories', function($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Search functionality
        if ($request->has('search') && $request->search) {
            $query->where(function($q) use ($request) {
                $q->where('judul', 'like', '%' . $request->search . '%')
                    ->orWhere('konten', 'like', '%' . $request->search . '%')
                    ->orWhereHas('user', function($q) use ($request) {
                        $q->where('name', 'like', '%' . $request->search . '%');
                    });
            });
        }

        $news = $query->latest()->paginate(6);
        $categories = NewsCategory::all();

        return view('news', compact('news', 'categories'));
    }

    public function show($slug)
    {
        $news = News::with(['newscategories', 'user'])
            ->where('slug', $slug)
            ->firstOrFail();

        // Get related news based on categories
        $relatedNews = News::whereHas('newscategories', function($query) use ($news) {
            $query->whereIn('news_categories.id', $news->newscategories->pluck('id'));
        })
        ->where('id', '!=', $news->id)
        ->latest()
        ->take(3)
        ->get();

        return view('news-detail', compact('news', 'relatedNews'));
    }
} 