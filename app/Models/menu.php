<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'price',
        'description',
        'image_dir'
    ];

    public function menu_a(){
        return $this->hasMany(orderlist::class);
    }
    public function menu_category(){
        return $this->belongsTo(category::class);
    }
}
