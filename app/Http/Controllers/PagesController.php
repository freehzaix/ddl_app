<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //home
    public function home(){
        $user = new User();
        $user->name = "Jean-Luc";
        return view('home', ['user' => $user]); 
    }

}
