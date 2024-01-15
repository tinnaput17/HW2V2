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
        echo $this->myvar;
    }
}
