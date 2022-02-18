<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotaResource extends JsonResource
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
            "user_id" => $this->user_id,
            "user" => new UserResource($this->user),
            "materia_id" => $this->materia_id,
            "materia" => new MateriaResource($this->materia),
            "evaluacion" => $this->evaluacion,
            "nota" => $this->nota,
        ];
    }
}
