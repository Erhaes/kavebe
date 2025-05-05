<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Equipment extends Model
{
    protected $fillable =[
        'nama_alat',
        'keterangan',
        'slug',
        'keterangan_alat',
        'gambar_alat',
        'facilities_id'
    ];

    public function facility():BelongsTo{
        return $this->belongsTo(Facility::class);
    }

    public function testings():HasMany{
        return $this->hasMany(Testing::class);
    }
}
