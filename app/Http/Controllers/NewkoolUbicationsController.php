<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Inertia\Inertia;

class NewkoolUbicationsController extends Controller
{
    public function index(){


        $cities = DB::table('newkool_ubications')->select('estado')->get()->unique();
 

        return Inertia::render('Ubications',[
            'cities' => $cities
        ]);
    }

    public function details($id){
        $city = str_replace(('-'), ' ', $id);
        
        $ubications = DB::table('newkool_ubications')->where('estado', '=', $city)->get();    
        $cities = DB::table('newkool_ubications')->where('estado', '=', $city)->select('ciudad')->get()->unique();
        
        return Inertia::render('Branchs',[
            'ubications' => $ubications,
            'cities' => $cities
        ]);
    } 
}
