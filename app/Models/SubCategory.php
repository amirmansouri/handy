<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'subcategory';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address'];

}
