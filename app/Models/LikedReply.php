<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LikedReply extends Model
{
    protected  $guarded = [];
    use HasFactory;



    /**
     * Get all of the comments for the LikedReply
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */


    //  public function commentLikes(): BelongsTo
    //  {
    //      return $this->belongsTo(PostReply::class,'reply_id');
    //  }

     public function commentLikes(): BelongsTo
     {
         return $this->belongsTo(PostReply::class, 'reply_id');
     }
 
    
   

}
