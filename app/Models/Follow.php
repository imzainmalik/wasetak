<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Follow extends Model
{
    use HasFactory;

    /**
     * Get the userInfo that owns the Follow
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function followByUserInfo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'follow_by');
    }
    
    /**
     * Get the followeUserInfo that owns the Follow
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function followeUserInfo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'follow_to');
    }
}
