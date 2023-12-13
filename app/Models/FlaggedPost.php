<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FlaggedPost extends Model
{
    use HasFactory;

    /**
     * Get all of the flaggedPostDetails for the FlaggedPost
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */


    public function flaggedPostByUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function flaggedPostDetails(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }


    public function PostUserDetails(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
