<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class PostReply extends Model
{
    use HasFactory;
 

    /**
     * Get the getCommentedByUsernfo that owns the PostReply
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getCommentedByUserInfo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the getPostedUserInfo that owns the PostReply
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getPostedUserInfo(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'user_id');
    }

    /**
     * Get the getPostDetailsFromReply that owns the PostReply
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getPostDetailsFromReply(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
