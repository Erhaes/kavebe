<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Lab extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $fillable = [
        'nama',
        'cta',
        'slug',
        'keterangan',
        // 'gambar',
        // 'video',
        'visi',
        'misi',
    ];

    public function contact():HasMany{
        return $this->hasMany(Contact::class);
    }

    public function certificates():HasMany{
        return $this->hasMany(Certificate::class);
    }

    public function facilities():HasMany{
        return $this->hasMany(Facility::class);
    }
    
    /**
     * Register media collections for the model
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('foto_lab')
            ->singleFile(); // Makes it a single file collection
            
        $this->addMediaCollection('videolab')
            ->singleFile();
    }
}
