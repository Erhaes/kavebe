<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class News extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        // 'gambar',
        'konten',
        'user_id',
    ];

    public function newscategories():BelongsToMany{
        return $this->belongsToMany(NewsCategory::class, 'newscat');
    }
}
