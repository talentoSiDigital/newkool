<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\contact;

class NewkoolContactsController extends Controller
{ 

    
    public function submit(Request $request){
            // $requestItems =  $request->all()["_value"];
            // Mail::to("mzorrilla.sidigital@gmail.com")->send(new contact(
            //     $requestItems["name"],
            //     $requestItems["email"],
            //     $requestItems["phone"],
            //     $requestItems["subject"],
            //     $requestItems["message"],
            // ));
            $data=[
                'name'=> $request->all()["_value"]['name'],
                'email'=> $request->all()["_value"]['email'],
                'phone'=> $request->all()["_value"]['phone'],
                'subject'=> $request->all()["_value"]['subject'],
                'message'=> $request->all()["_value"]['message']
            ];

            Mail::to("mzorrilla.sidigital@gmail.com")->send(new contact($data));


        return Inertia::render('Contact',[
            'message'=>'Mensaje enviado con exito'
        ]);
    }
    

}
