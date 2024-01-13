<?php

namespace App\Models;

use App\Models\User;
use App\Models\AdminPage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageLike extends Model
{
    protected $guadred = [];
    use HasFactory;


    public function getPageLikes(): BelongsTo
    {
        return $this->belongsTo(AdminPage::class, 'id');
    }

    public function getLikedUserInfo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getPageByAdminInfo(): BelongsTo
    {
        return $this->belongsTo(AdminPage::class, 'page_id');
    }

    public function getPageDetails(): BelongsTo
    {
        return $this->belongsTo(AdminPage::class,'page_id');
    }
}
