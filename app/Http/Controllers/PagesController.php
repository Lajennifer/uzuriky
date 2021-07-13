<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $sum = 5+6;       
        return view('welcome',[
            'foo' =>'bar',
            'somme'=> $sum
        
        ]);
    
    }
}
