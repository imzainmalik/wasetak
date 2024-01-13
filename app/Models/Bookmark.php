<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bookmark extends Model
{
    use HasFactory;

    /**
     * Get the posts that owns the Bookmark
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bookmarksPostDetails(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }



 
}
