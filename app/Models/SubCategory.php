<?php

namespace App\Models;

use App\Models\ForumCategory;
use App\Models\SubSubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Post;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SubCategory extends Model
{
    protected $guarded = [];
    use HasFactory;

    /**
     * Get the user that owns the SubCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */


     public function forum_category()
     {
         return $this->belongsTo(ForumCategory::class);
     }

     public function sub_sub_categories()
     {
         return $this->hasMany(SubSubCategory::class);
     }


     public function subCategorys(): HasOne
     {
         return $this->hasOne(Post::class,'sub_category_id');
     }
 

}
