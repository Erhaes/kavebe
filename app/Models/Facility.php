<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Facility extends Model
{
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
}
