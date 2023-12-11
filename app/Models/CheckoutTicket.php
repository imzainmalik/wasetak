<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class CheckoutTicket extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id', 
        'user_id', 
        'other_user_id', 
        'is_seller', 
        'ticket_for', 
        'service_describe', 
        'long_service_take', 
        'service_rate', 
        'payment_method', 
        'transaction_amount', 
        'additional_comment', 
        'handle_url', 
        'original_email_included',
        'ticket_no'
    ];

    public function seller_data()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }
    public function buyer_data()
    {
        return $this->hasOne(User::class, 'id','other_user_id');
    }
}
