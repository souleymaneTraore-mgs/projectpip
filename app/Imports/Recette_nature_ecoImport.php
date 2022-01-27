<?php

namespace App\Imports;

use App\Models\recette_nature_eco;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Recette_nature_ecoImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new recette_nature_eco([
            
            'classe' => $row['classe'],
            'article'=> $row['article'],
            'paragraphe'=> $row['paragraphe'],
            'ligne'=> $row['ligne'],
            'rubrique'=> $row['rubrique'],
            'sous_rubrique'=> $row['sous_rubrique'],
            'libelle_nature_eco'=> $row['libelle_nature_eco'],
        ]);
    }
}
