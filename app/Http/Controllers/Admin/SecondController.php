<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    public  function __construct(){
            $this->middleware('auth')->except('show4');
    }
    public function show1(){
        return '<h1>One</h1>';
    }
    public function show2(){
        return '<h1>Two</h1>';
    }
    public function show3(){
        return '<h1>Three</h1>';
    }
    public function show4(){
        return '<h1>Four</h1>';
    }
}
