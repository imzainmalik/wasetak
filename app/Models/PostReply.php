<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        return $this->belongsTo(User::class, 'user_id');
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

    public function getPosts(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    
   public function user() {
    return $this->belongsTo(User::class);
}

public function post() {
    return $this->belongsTo(Post::class);
}


  
     
  



     public function commentLikes(): HasMany
     {
         return $this->hasMany(LikedReply::class, 'reply_id');
     }
     
     public function commentLike(): HasOne
     {
         return $this->hasOne(LikedReply::class, 'reply_id');
     }
     

}
