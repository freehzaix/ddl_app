<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    //Afficher tous les étudiants
    public function index(){
        $etudiants = Etudiant::all();

        return view('etudiant.index', [
            'etudiants' => $etudiants
        ]);
    }

    //Afficher le formulaire pour ajouter un étudian
    public function add(){
        $classes = Classe::all();
        
        return view('etudiant.add', [
            'classes' => $classes
        ]);
    }

    //Traitement du formulaire pour ajouter un étudiant
    public function store(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe_id' => 'required',
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe_id = $request->classe_id;
        $etudiant->save();

        return back()->with('status', 'L\'étudiant a bien été enregistré.');

    }

    //Afficher les informations d'un étudiant
    public function show($id){
        $etudiant = Etudiant::find($id);
        $classes = Classe::all();

        return view('etudiant.show', [
            'etudiant' => $etudiant,
            'classes' => $classes,
        ]);
    }

    //Modifier un étudiant
    public function update(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
        ]);

        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe_id = $request->classe_id;
        $etudiant->update();

        return back()->with('status', 'L\'étudiant a bien été modifié.');

    }

}
