<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    function ShowHello($name){
return '<h1>hello : '.$name.'</h1>';

    }
    function resultProduct($product){
        return '<h1>Show : '.$product.'</h1>';
        
    }
     function show(){
        return view('users')
        ->with('name','bee')
        ->with('title','laravel tutorial');
    }
}
