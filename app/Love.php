<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Love extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function scopeLike($query)
    {
        return $query->whereStatus('like');
    }
    public function scopeDisLike($query)
    {
        return $query->whereStatus('dislike');
    }
}
