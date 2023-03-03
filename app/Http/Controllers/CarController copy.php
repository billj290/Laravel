<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function sayHello(){
        dd('hello controller :)');
    } 

    public function index(){
        // dd("hellow index");
        return view('car.index');
    }
}
