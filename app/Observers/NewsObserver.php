<?php

namespace App\Observers;

use App\Models\News;

class NewsObserver
{
    /**
     * Handle the News "updating" event.
     */
    public function updating(News $news): void
    {
        // If we're replacing media, make sure old media is removed first
        // This is a safeguard in case Spatie's automatic cleanup doesn't work
        $news->getMedia('foto_berita')->each(function ($media) use ($news) {
            if (!$news->wasChanged('updated_at')) {
                $media->delete();
            }
        });
    }

    /**
     * Handle the News "deleting" event.
     */
    public function deleting(News $news): void
    {
        // This is a backup for Spatie's automatic cleanup
        $news->getMedia('foto_berita')->each(fn ($media) => $media->delete());
    }
} 