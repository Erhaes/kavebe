<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class News extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    protected $fillable = [
        'judul',
        'slug',
        // 'gambar',
        'konten',
        'user_id',
    ];

    public function newscategories():BelongsToMany{
        return $this->belongsToMany(NewsCategory::class, 'newscat');
    }
    
    /**
     * Register media collections for the model
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('foto_berita')
            ->singleFile(); // Makes it a single file collection
    }
}
