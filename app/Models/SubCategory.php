<?php

namespace App\Models;

use App\Models\ForumCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

}
