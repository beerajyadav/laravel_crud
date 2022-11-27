<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class mycontroller extends Controller
{
    public function insert(Request $r)
    {
        $prod = new product();
        $prod->pname = $r->pname;
        $prod->pprice = $r->pprice;
        $pimage = $r->file('image')->getClientOriginalName();
        $prod->pimage = $pimage;
        $r->image->move(public_path('images'), $pimage);
        $prod->save();

        return redirect('/'); 
        // return $r->input();
    }
    public function readdata()
    {
        $pdata = product::all();
        return view('insertRead',['data'=>$pdata]);
    }
    public function updatedelete(Request $r)
    {
        $id= $r->id;
        $name= $r->name;
        $price= $r->price;
        if ($r->update) {
            # code...
        }
        $image= $r->image;
    }
}
