<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class MyController extends Controller
{
    function insert(Request $req){
        $name =    $req->get('pname');
        $price =    $req->get('pprice');
        $pimage =    $req->file('image')->getClientOriginalName();
        // move uploaded file
        $req->image->move(public_path('images'), $pimage);

        $prod = new product();
        $prod->PName = $name;
        $prod->PPrice = $price;
        $prod->PImage = $pimage;
        $prod->save();
        return redirect('/');
    }

    function readdata(){
        $pdata = product::all();
        return view('insertRead', ['data'=>$pdata]);
    }
}
