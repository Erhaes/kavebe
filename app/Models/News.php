<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'gambar',
        'konten',
        'user_id',
        'news_category_id'
    ];

    public function newscategory():BelongsTo{
        return $this->belongsTo(NewsCategory::class);
    }
}
