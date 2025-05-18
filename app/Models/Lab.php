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
        // 'slogan',
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
}
