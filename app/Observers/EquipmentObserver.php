<?php

namespace App\Observers;

use App\Models\Equipment;

class EquipmentObserver
{
    /**
     * Handle the Equipment "updating" event.
     */
    public function updating(Equipment $equipment): void
    {
        // If we're replacing media, make sure old media is removed first
        // This is a safeguard in case Spatie's automatic cleanup doesn't work
        $equipment->getMedia('foto_alat')->each(function ($media) use ($equipment) {
            if (!$equipment->wasChanged('updated_at')) {
                $media->delete();
            }
        });
    }

    /**
     * Handle the Equipment "deleting" event.
     */
    public function deleting(Equipment $equipment): void
    {
        // This is a backup for Spatie's automatic cleanup
        $equipment->getMedia('foto_alat')->each(fn ($media) => $media->delete());
    }
} 