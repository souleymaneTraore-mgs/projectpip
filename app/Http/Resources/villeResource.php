<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class villeResource extends JsonResource
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
        'code_ville' => $this->code_ville,
        'libelle_ville' => $this->libelle_ville,
        'pays_id' => paysResource::make($this->pays)
        ];
        //return parent::toArray($request);
    }
}
