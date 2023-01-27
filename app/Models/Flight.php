<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
}

class category extends Model
{
    use HasFactory;
    public function category_menu(){
        return $this->hasMany(menu::class);
    }
}

class Menu extends Model
{
    use HasFactory;
    public function menu_a(){
        return $this->hasMany(orderlist::class);
    }
    public function menu_category(){
        return $this->belongsTo(category::class);
    }
}

class order extends Model
{
    use HasFactory;
    public function order(){
        return $this->hasMany(orderlist::class);
    }
}

class Orderlist extends Model
{
    use HasFactory;

    public function orderlist_menu(){
        return $this->belongsTo(menu::class);
    }

    public function orderlist_order(){
        return $this->belongsTo(menu::class);
    }
}

public function up()
    {
        Schema::create('orderlists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('order_id');
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('location');
        $table->string('email');
        $table->string('phone_number');
        $table->string('order_note');
        $table->boolean('status');
        $table->timestamps();
    });

    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
            $table->timestamp('last_updated')->nullable();
            $table->string('name');
            $table->string('category');
            $table->integer('price');
            $table->text('description');
            $table->text('image_dir');
        });
    }
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $order= new order();
        $order->name= $request->name;
        $order->location=$request->location;
        $order->phone_number=$request->phone_number;
        $order->email=$request->email;
        $order->save();
  
        $id=$order->id;
        $orderlist= new orderlist();
        $orderlist->menu_id=$request->menu_id;
        $orderlist->order_id=$id;
         $orderlist->quantity=1;
         $orderlist->save();
    }
