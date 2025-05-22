<?php

namespace App\Observers;

use App\Models\Team;

class TeamObserver
{
    /**
     * Handle the Team "updating" event.
     */
    public function updating(Team $team): void
    {
        // If we're replacing media, make sure old media is removed first
        // This is a safeguard in case Spatie's automatic cleanup doesn't work
        $team->getMedia('foto_anggota')->each(function ($media) use ($team) {
            if (!$team->wasChanged('updated_at')) {
                $media->delete();
            }
        });
    }

    /**
     * Handle the Team "deleting" event.
     */
    public function deleting(Team $team): void
    {
        // This is a backup for Spatie's automatic cleanup
        $team->getMedia('foto_anggota')->each(fn ($media) => $media->delete());
    }
} 