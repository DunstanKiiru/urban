<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display published news articles.
     */
    public function index()
    {
        $news = News::where('is_published', true)
            ->where(function ($query) {
                $query->whereNull('published_at')
                    ->orWhere('published_at', '<=', now());
            })
            ->latest('published_at')
            ->paginate(9);

        return view('news', compact('news'));
    }

    /**
     * Display a single published news article.
     */
    public function show(News $news)
    {
        abort_unless(
            $news->is_published &&
            (
                is_null($news->published_at) ||
                $news->published_at <= now()
            ),
            404
        );

        return view('news-show', compact('news'));
    }
}
