<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public $myvar = "Hello World!";
    function __construct()//MyController
    { 

    }
    public function index(){
        // $data = ['val_a'=>'Hello World!'];
        // $data['val_b'] = "Laraval";
        // return view('myfolder.mypage',$data);
        return view('home');
    }
    public function store(Request $req){
        $data['myinput']=$req->input('myinput');
        return view('myroute',$data);
    }
}
