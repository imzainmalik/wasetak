<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PageReply extends Model
{
    use HasFactory;


    public function getCommentedByUserInfo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getPageByAdminInfo(): BelongsTo
    {
        return $this->belongsTo(AdminPage::class, 'page_id');
    }
    public function getPageDetailsFromReply(): BelongsTo
    {
        return $this->belongsTo(AdminPage::class, 'page_id');
    }


    public function getPageDetails(): BelongsTo
    {
        return $this->belongsTo(AdminPage::class,'page_id');
    }
}
