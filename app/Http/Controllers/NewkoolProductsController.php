<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewkoolProductsController extends Controller
{
    public function getAll(){
        $products = DB::table('newkool_products')->select('id','code','type','name')->get();

        return Inertia::render('Products',[
            'products' => $products,
            'name'=> 'Todos los productos'
        ]);
    }
    public function getByType($name){
        $products = DB::table('newkool_products')->where('tag',$name)->select('id','code','type','name')->get();
        
        return Inertia::render('Products',[
            'products' => $products,
            'name'=> $name
            
        ]);
    }
    public function getDescription($name){
        $product = DB::table('newkool_products')->where('name', '=' , $name)->get();
        $slider = DB::table('newkool_products')->get()->take(6)->random(6);

        return Inertia::render('Description',[
            'product' => $product,
            'slider'=>$slider   
        ]);
    }
}
 