<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostViews extends Model
{
    use HasFactory;

    /**
     * Get the getPostTotal that owns the PostViews
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getPostTotal(): BelongsTo
    {
        sapi_windows_cp_conv(12);

        return $this->belongsTo(Post::class, 'post_id');
    }
}
