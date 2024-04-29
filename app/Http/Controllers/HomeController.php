<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function checkRole()
   {
       $authRole =auth()->user()->role;

       if($authRole=='admin'){

           return view('dash.dash');
       }else{

           return view('website.index');

       }
   }
}
