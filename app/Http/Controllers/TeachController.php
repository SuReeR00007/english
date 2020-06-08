<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachController extends Controller
{
    public function home()
    {
         return view('home');
    }
    
    public function abc()
    {
         return view('abc');
    }
    
    public function words()
    {
         return view('words');
    }
    
    public function translate()
    {
         return view('translate');
    }
}
