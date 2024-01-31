<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PushNotification extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function getAdminInfo(): BelongsTo
     {
         return $this->belongsTo(Admin::class, 'admin_id_from');
     }
    public function getUserInfo(): BelongsTo
     {
         return $this->belongsTo(User::class, 'user_id_to');
     }
}
