<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class recette_natureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            
            'classe'=> $this->classe,
            'article'=>$this->article,
            'paragraphe'=>$this->paragraphe,
            'ligne'=>$this->ligne,
            'rubrique'=>$this->rubrique,
            'sous_rubrique'=>$this->sous_rubrique,
            'libelle_nature_eco'=>$this->libelle_nature_eco
        ];
        //return parent::toArray($request);
    }
}
