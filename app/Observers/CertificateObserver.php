<?php

namespace App\Observers;

use App\Models\Certificate;

class CertificateObserver
{
    /**
     * Handle the Certificate "updating" event.
     */
    public function updating(Certificate $certificate): void
    {
        // If we're replacing media, make sure old media is removed first
        // This is a safeguard in case Spatie's automatic cleanup doesn't work
        $certificate->getMedia('foto_sertifikat')->each(function ($media) use ($certificate) {
            if (!$certificate->wasChanged('updated_at')) {
                $media->delete();
            }
        });
        
        $certificate->getMedia('file_sertifikat')->each(function ($media) use ($certificate) {
            if (!$certificate->wasChanged('updated_at')) {
                $media->delete();
            }
        });
    }

    /**
     * Handle the Certificate "deleting" event.
     */
    public function deleting(Certificate $certificate): void
    {
        // This is a backup for Spatie's automatic cleanup
        $certificate->getMedia('foto_sertifikat')->each(fn ($media) => $media->delete());
        $certificate->getMedia('file_sertifikat')->each(fn ($media) => $media->delete());
    }
} 