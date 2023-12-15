<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\SubCategory;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Get the user associated with the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */


     public function getUserInfo(): BelongsTo
     {
         return $this->belongsTo(User::class, 'user_id');
     }

     /**
      * Get the getCategoryInfo associated with the Post
      *
      * @return \Illuminate\Database\Eloquent\Relations\HasOne
      */
     public function getCategoryInfo(): HasOne
     {
         return $this->hasOne(ForumCategory::class, 'id');
     }

     /**
      * Get the flaggedPost that owns the Post
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
     public function flaggedPost(): BelongsTo
     {
         return $this->belongsTo(User::class, 'user_id');
     }

     public function getSubCategoryInfo(): BelongsTo
     {
         return $this->belongsTo(SubCategory::class, 'id');
     }

     /**
      * Get the getPostDetailsFromReply associated with the Post
      *
      * @return \Illuminate\Database\Eloquent\Relations\HasOne
      */
     public function getPostDetailsFromReply(): HasOne
     {
         return $this->hasOne(PostReply::class, 'id');
     }
}
 