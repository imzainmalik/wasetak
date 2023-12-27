<?php

namespace App\Models;

use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ForumCategory extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'category_id');
    }


    public function mainCategories() {
        return $this->belongsTo(Post::class,'category_id');
     }

    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function get_posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
 