<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\addProductRequest;
use App\Room;
class AdminController extends Controller
{
  
     function index(){
         $rooms=Room::all();
       return view('admin/index',['rooms'=> $rooms]);
    }
    function addProduct(){
    	return view('admin/add_product');
    }
   
    function store(addProductRequest $request)
    { 
        $name = $request->name;
        $image= $request->file('image')->store('public');
        $number =$request->number;
        $typeroom=$request->typeroom;
        $area=$request->area;
        $price = $request->price;
        
        
        $rooms= new Room;

        $rooms->name=$name;
        $rooms->image=$image;
        $rooms->typeroom=$typeroom;
        $rooms->number=$number;
        $rooms->area=$area;
        $rooms->price=$price;
        $rooms->save();

        return redirect('admin/home');

    }

}
