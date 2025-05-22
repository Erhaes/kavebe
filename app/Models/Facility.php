<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Facility extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    protected $fillable = [
        'nama_lab',
        'slug',
        'keterangan',
        // 'gambar',
        'lab_id'
    ];

    public function equipments():HasMany{
        return $this->hasMany(Equipment:: class);
    }

    public function lab():BelongsTo{
        return $this->belongsTo(Lab::class);
    }
    
    /**
     * Register media collections for the model
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('foto_fasilitas')
            ->singleFile(); // Makes it a single file collection
    }
}
