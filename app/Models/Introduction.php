<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Introduction extends Model
{
    protected $fillable = [
        'pengantar',
        'team_id',
    ];

    public function team():BelongsTo{
        return $this->belongsTo(Team::class);
    }
}
