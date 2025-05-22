<?php

namespace App\Observers;

use App\Models\Facility;

class FacilityObserver
{
    /**
     * Handle the Facility "updating" event.
     */
    public function updating(Facility $facility): void
    {
        // If we're replacing media, make sure old media is removed first
        // This is a safeguard in case Spatie's automatic cleanup doesn't work
        $facility->getMedia('foto_fasilitas')->each(function ($media) use ($facility) {
            if (!$facility->wasChanged('updated_at')) {
                $media->delete();
            }
        });
    }

    /**
     * Handle the Facility "deleting" event.
     */
    public function deleting(Facility $facility): void
    {
        // This is a backup for Spatie's automatic cleanup
        $facility->getMedia('foto_fasilitas')->each(fn ($media) => $media->delete());
    }
} 