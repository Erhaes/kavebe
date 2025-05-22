<?php

namespace App\Observers;

use App\Models\Lab;

class LabObserver
{
    /**
     * Handle the Lab "updating" event.
     */
    public function updating(Lab $lab): void
    {
        // If we're replacing media, make sure old media is removed first
        // This is a safeguard in case Spatie's automatic cleanup doesn't work
        $lab->getMedia('foto_lab')->each(function ($media) use ($lab) {
            if (!$lab->wasChanged('updated_at')) {
                $media->delete();
            }
        });
        
        $lab->getMedia('videolab')->each(function ($media) use ($lab) {
            if (!$lab->wasChanged('updated_at')) {
                $media->delete();
            }
        });
    }

    /**
     * Handle the Lab "deleting" event.
     */
    public function deleting(Lab $lab): void
    {
        // This is a backup for Spatie's automatic cleanup
        $lab->getMedia('foto_lab')->each(fn ($media) => $media->delete());
        $lab->getMedia('videolab')->each(fn ($media) => $media->delete());
    }
} 