<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogGeneration extends Model
{
    protected $fillable = [
        'user_id',
        'topic',
        'keywords',
        'tone',
        'audience',
        'generated_titles',
        'meta_description',
        'status',
        'tokens_used'
    ];

    protected $casts = [
        'generated_titles' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}