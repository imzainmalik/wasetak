<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        return $this->belongsTo(Post::class,'post_id');
    }

    /**
     * Get the getPostLikes that owns the PostLike
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getPostLikes(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'id');
    }

    /**
     * Get the likedByUserDetails associated with the PostLike
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */


    public function likedByUserDetails(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    

    public function post() {
        return $this->belongsTo(Post::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
    
}
