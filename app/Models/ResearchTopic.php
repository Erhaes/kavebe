<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResearchTopic extends Model
{
    use HasFactory;

    protected $fillable = [
        'topik',
        'slug',
    ];
}
