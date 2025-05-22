<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Team extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    protected $fillable = [
        'nama',
        // 'gambar',
        'user_id',
        'position_id'
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function position():BelongsTo{
        return $this->belongsTo(Position::class);
    }
    
    /**
     * Register media collections for the model
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('foto_anggota')
            ->singleFile(); // Makes it a single file collection
    }
}
