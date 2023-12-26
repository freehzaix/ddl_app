<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    //Liste des étudiants
    function index(){
        $etudiants = Etudiant::all();

        return view('etudiant.index', [
            'etudiants' => $etudiants
        ]);
    }
}
