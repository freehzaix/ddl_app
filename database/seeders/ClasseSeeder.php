<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classe = new Classe();
        $classe->libelle = "Licence 1";
        $classe->save();

        $classe2 = new Classe();
        $classe2->libelle = "Licence 2";
        $classe2->save();

        $classe3 = new Classe();
        $classe3->libelle = "Licence 3";
        $classe3->save();
        
    }
}
