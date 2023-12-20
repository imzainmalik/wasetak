<?php

namespace App\Models;

use App\Models\User;
use App\Models\PostView;
use App\Models\PostReply;
use App\Models\SubCategory;
use App\Models\ForumCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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


     public function getCatInfo(): BelongsTo
     {
         return $this->belongsTo(ForumCategory::class, 'category_id');
     }
     public function getSubCatInfo(): BelongsTo
     {
         return $this->belongsTo(SubCategory::class, 'sub_category_id');
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
     
     public function getPostReplies(): HasMany
     {
         return $this->hasMany(PostReply::class, 'post_id');
     }
     
     public function getPostViews(): HasMany
     {
         return $this->hasMany(PostView::class, 'post_id');
     }
     public function getPostlikes(): HasMany
     {
         return $this->hasMany(PostLike::class, 'post_id');
     }

   
    /**
      * Get the getPostViews associated with the Post
      *
      * @return \Illuminate\Database\Eloquent\Relations\hasOne
      */
      public function getPostView(): hasOne
      {
          return $this->hasOne(PostViews::class, 'id');
      }

}
 