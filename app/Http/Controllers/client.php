<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\order;
use App\Models\category;
use App\Models\orderlist;
use App\Models\User;
use Illuminate\Http\Request;

class client extends Controller
{
    //
    public function index(){
      $category=category::all();
      return view('client.index',['categories'=>$category]);
    }

    public function cart($id){
        $data=Menu::where('id',$id)->get();
              
           return view('client.cart',['data'=>$data[0]]);
    }
    public function checkout(Request $request){
          $id=$request->id;
              $name=menu::where('id',$id)->get();
                 return view('client.checkout',['menu'=>$name[0]]);
    }
    public function order(Request $request){
      $request->validate([
        'name'=>'required',
        'phone_number'=>'required',
        'location'=>'required',
        'email'=>'required',
        'order_note'=>'required'
      ]);
      $order = order::create([
       'name'=>$request->name,
       'phone_number'=>$request->phone_number,
       'location'=>$request->location,
       'email'=>$request->email,
       'order_note'=>$request->order_note,
       'status'=>'1'
    ]);

    $order_id=$order->id;
        $orderlist=orderlist::create([
          'menu_id'=>$request->menu_id,
          'order_id'=>$order_id,
          'quantity'=>'1'
        ]);
        $request->session()->flash('message', 'your order is placed successfully');
        return redirect(route('home'));
    }


  
}
