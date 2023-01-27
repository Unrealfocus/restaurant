<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'location',
        'status',
        'order_note'
        
    ];
    public function order(){
        return $this->hasMany(orderlist::class);
    }
}
