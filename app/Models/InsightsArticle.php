<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsightsArticle extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'author'
    ];
}