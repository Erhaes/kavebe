<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
    protected $fillable = [
        'nama',
        'gambar',
        'user_id',
        'position_id'
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function position():BelongsTo{
        return $this->belongsTo(Position::class);
    }
}
