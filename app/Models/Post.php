<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;

    /**
     * Get the user associated with the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */


     public function getUserInfo(): HasOne
     {
         return $this->hasOne(User::class, 'id');
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
}
 