<?php

namespace App\Observers;

use App\Models\Testing;

class TestingObserver
{
    /**
     * Handle the Testing "updating" event.
     */
    public function updating(Testing $testing): void
    {
        // If we're replacing media, make sure old media is removed first
        // This is a safeguard in case Spatie's automatic cleanup doesn't work
        $testing->getMedia('foto_pengujian')->each(function ($media) use ($testing) {
            if (!$testing->wasChanged('updated_at')) {
                $media->delete();
            }
        });
    }

    /**
     * Handle the Testing "deleting" event.
     */
    public function deleting(Testing $testing): void
    {
        // This is a backup for Spatie's automatic cleanup
        $testing->getMedia('foto_pengujian')->each(fn ($media) => $media->delete());
    }
} 