<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Equipment extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    protected $fillable =[
        'nama_alat',
        'keterangan',
        'slug',
        'keterangan_alat',
        // 'gambar_alat',
        'facilities_id'
    ];

    public function facility():BelongsTo{
        return $this->belongsTo(Facility::class);
    }

    public function testings():HasMany{
        return $this->hasMany(Testing::class);
    }
    
    /**
     * Register media collections for the model
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('foto_alat')
            ->singleFile(); // Makes it a single file collection
    }
}
