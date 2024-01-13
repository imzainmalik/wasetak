<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FlagedPage extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function flaggedPageDetails(): BelongsTo
    {
        return $this->belongsTo(AdminPage::class, 'page_id');
    }

    public function flaggedPageByUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
