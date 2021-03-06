<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommuneResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

            'code' => $this->code,
            'nom' => $this->nom,
            'departement_code' => $this->departement_code,
            'latitude' => (double) $this->latitude,
            'longitude' => (double) $this->longitude,
        ];
    }
}
