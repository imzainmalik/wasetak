<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostLike extends Model
{
    use HasFactory;


    public function getLikedUserInfo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getPostByUserInfo(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    /**
     * Get the getPostDetails that owns the PostLike
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getPostDetails(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    
}
