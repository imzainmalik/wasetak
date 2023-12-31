<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AdminPage extends Model
{
    protected $guarded = [];
    use HasFactory;

    protected static function boot()
    {
        parent::boot();
  
        static::created(function ($page) {
            $page->slug = $page->createSlug($page->name);
            $page->save();
        });
    }

    private function createSlug($name){
        if (static::whereSlug($slug = Str::slug($name))->exists()) {
            $max = static::wherename($name)->latest('id')->skip(1)->value('slug');
  
            if (is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
  
            return "{$slug}-2";
        }
  
        return $slug;
    }

    public function getAdminInfo(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function getPageLikes(): HasMany
    {
        return $this->HasMany(PageLike::class, 'page_id');
    }
}
