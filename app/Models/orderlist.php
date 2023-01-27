<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_id',
        'order_id',
        'quantity'
    ];
    public function orderlist_menu(){
        return $this->belongsTo(menu::class);
    }

    public function orderlist_order(){
        return $this->belongsTo(menu::class);
    }
}
