<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
   // protected $primaryKey = 'id';
    protected $fillable = ['name', 'address','category_id',];
    public function services(){
        return $this->hasMany(Service::class, 'category_id','id');
    }
}
