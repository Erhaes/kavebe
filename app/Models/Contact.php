<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    protected $fillable = [
        'kontak',
        'icon',
        'jenis_kontak',
        'lab_id'
    ];

    public function lab():BelongsTo{
        return $this->belongsTo(Lab::class);
    }
}
