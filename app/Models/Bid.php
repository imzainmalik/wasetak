<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bid extends Model
{
    use HasFactory;
  
    /**
     * Get the postDetails that owns the Bid
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function postDetails(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    /**
     * Get all of the getBids for the Bid
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getBids(): HasMany
    {
        return $this->hasMany(Post::class, 'post_id');
    }

    /**
     * Get the BidderUserDetails associated with the Bid
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function BidderUserDetails(): belongsTo
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }

}
