<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CentroResource extends JsonResource
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
            "id" => $this->id,
            "codigo" => $this->codigo,
            "nombre" => $this->nombre,
            "web" => $this->web,
<<<<<<< HEAD
            "coordinador" => $this->coordinador,
            "verificado" => $this->verificado
=======
            "coordinador" => new UserResource($this->user),
            "verificado" => $this->verificado,
>>>>>>> dd4f6ffaea26659a4dbccb8c93733a1cefe849ec
        ];
    }
}
