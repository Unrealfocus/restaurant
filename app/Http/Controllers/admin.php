<?php

namespace App\Http\Controllers;

use session;
use App\Models\menu;
use App\Models\order;
use App\Models\category;
use App\Models\orderlist;
use Illuminate\Http\Request;

class admin extends Controller
{
    //
    public function addmenu(){
        $data=category::get();
        return view('addmenu',['data'=>$data[0]]);
    }
    public function store_menu(Request $request){
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'descript'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',
          ]);

          $image_name=$request->file('image')->getClientOriginalName();
          $request->image->move(public_path('image'),$image_name);

          $menu = menu::create([
            'name' => $request->name,
            'category_id'=>$request->category,
            'price' => $request->price,
            'description' => $request->descript,
            'image_dir'=>$image_name
        ]);

        return redirect('managemenu')->with('message','menu created successfully');
    }
    public function orderlist(){
        $orders=order::all();
        return view('orderlist',['data'=>$orders]);
      }

      public function orderdetails(Request $request){
        $id=$request->id;
        $order=order::where('id',$id)->get();
        return view('orderdetails',['data'=>$order[0]]);
      }
    public function managemenu(){
      $data=menu::all();
      return view('managemenu',['data'=>$data]);
    }
    public function deletemenu(Request $request){
      $id=$request->id;
      menu::destroy($id);
      $request->session()->flash('message', 'menu delete successfully!');
    return redirect("/managemenu");
    }
    public function single_menu($id){
      $data=menu::find($id);
      return view('single_menu',['data'=>$data]);
    }

}
