<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address','category_id','provider_id'];
    protected $casts = [
        'category_id'   => 'integer',
        'provider_id'   => 'integer',

    ];
    public function service(){
        return $this->belongsTo(Service::class,'service_id', 'id')->withTrashed();
    }

    public function handyman(){
        return $this->belongsTo(User::class,'user_id', 'id')->withTrashed();
    }

    public function subcategory(){
        return $this->belongsTo('App\Models\SubCategory','subcategory_id','id')->withTrashed();
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id', 'id')->withTrashed();
    }
}
