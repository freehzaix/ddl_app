<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    //Afficher tous les étudiants
    public function index(){
        $etudiants = Etudiant::all();

        return view('etudiant.index', [
            'etudiants' => $etudiants,
        ]);
    }
}
