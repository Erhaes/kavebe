<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Position extends Model
{
    protected $fillable = [
        'nama_jabatan'
    ];

    public function team():HasMany{
        return $this->hasMany(Team::class);
    }
}
