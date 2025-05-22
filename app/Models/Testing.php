<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Testing extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    protected $fillable = [
        'nama_testing',
        'slug',
        'keterangan',
        'satuan',
        'harga',
        'catatan',
        'sampel',
        // 'gambar',
        'facilities_id',
        'equipment_id'
    ];

    public function facility():BelongsTo{
        return $this->belongsTo(Facility::class);
    }

    public function equipment():BelongsTo{
        return $this->belongsTo(Equipment::class);
    }
    
    /**
     * Register media collections for the model
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('foto_pengujian')
            ->singleFile(); // Makes it a single file collection
    }
}
