<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'verification_token'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the givenFeedBackUserInfo associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function givenFeedBackUserInfo(): HasOne
    {
        return $this->hasOne(Rating::class, 'id');
    }

    /**
     * Get the user that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

     /**
      * Get the followByUserInfo associated with the User
      *
      * @return \Illuminate\Database\Eloquent\Relations\HasOne
      */
     public function followByUserInfo(): HasOne
     {
         return $this->hasOne(Follow::class, 'id');
     }

     /**
      * Get the followeUserInfo associated with the User
      *
      * @return \Illuminate\Database\Eloquent\Relations\HasOne
      */
     public function followeUserInfo(): HasOne
     {
         return $this->hasOne(User::class, 'id');
     }
    /**
     * Get the user that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function likes() {
        return $this->hasMany(PostLike::class);
    }

    
    public function posts(): HasMany
    {
        return $this->HasMany(Post::class, 'id');
    }

 
    /**
     * Get the flaggedPostBy that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function flaggedPostByUser(): HasOne
    {
        return $this->hasOne(Post::class, 'id');
    }
 
    public function postLikedBy(): HasOne
    {
        return $this->hasOne(PostLike::class, 'id');
    }

    /**
     * Get the getCommentedByUsernfo associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getCommentedByUsernfo(): HasOne
    {
        return $this->hasOne(PostReply::class, 'id');
    }

    /**
     * Get the likedByUserDetails that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function likedByUserDetails(): HasMany
    {
        return $this->HasMany(PostLike::class, 'id');
    }

    public function replies() {
        return $this->hasMany(PostReply::class);
    }
 
}
