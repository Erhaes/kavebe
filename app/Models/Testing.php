<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testing extends Model
{
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
}
