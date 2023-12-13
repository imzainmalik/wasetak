<?php

namespace App\Models;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubSubCategory extends Model
{
    use HasFactory;    
    protected $guarded = [];


    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }

}
