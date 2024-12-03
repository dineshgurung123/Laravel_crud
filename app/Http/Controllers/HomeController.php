<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //


public function index(){


    $users = [

        ['name' => 'Ram'],
        ['name' => 'Shyam'],
        ['name' => 'Hari']
      
          ];
      
       return view('homepage', ['users'=> $users]);

}
    

public function contact(){

    $users = [

      ['phone'=> '98831893'],
      ['phone' => '98361334']

    ];

   return view ('contactpage', ['users'=> $users]);

}


public function about(){



    return view ('aboutpage');

}



}
