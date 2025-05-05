<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lab extends Model
{
    protected $fillable = [
        'nama',
        // 'slogan',
        'slug',
        'keterangan',
        'gambar',
        'video',
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
