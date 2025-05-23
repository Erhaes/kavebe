<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Research extends Model
{
    protected $fillable = [
        'judul',
        'abstrak',
        'tahun',
        'link',
        'user_id',
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
