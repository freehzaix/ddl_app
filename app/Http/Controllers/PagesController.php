<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //home
    public function home(){
        $classes = Classe::all();

        return view('home', ['classes' => $classes]); 
    }

    public function shop(){
        return view ('shop');
    }

    public function contact(){
        return view('contact');
    }

}
