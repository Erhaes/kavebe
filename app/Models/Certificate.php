<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Certificate extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'lembaga',
        // 'gambar',
        'file',
        'lab_id',
    ];

    public function lab():BelongsTo{
        return $this->belongsTo(Lab::class);
    }
}
