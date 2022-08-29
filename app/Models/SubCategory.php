<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'subcategory';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address','category_id'];

    protected $casts = [
        'category_id'   => 'integer',
        'provider_id'   => 'integer',

    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id', 'id');
    }
}
