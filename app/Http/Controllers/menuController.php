<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuController extends Controller
{
    public function home(){
        return view('home');
    }

    public function nosotros(){
        return view('nosotros');
    }

    public function contacto(){
        return view('contacto');
    }
}
