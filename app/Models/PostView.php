<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostView extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getViewedUserInfo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getPostByUserInfo(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    /**
     * Get the getPostDetails that owns the PostView
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getPostDetails(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'id');
    }

    
}
