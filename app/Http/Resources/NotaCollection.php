<?php

namespace App\Http\Resources;

use App\Models\Materia;
use App\Models\User;
use Illuminate\Http\Resources\Json\ResourceCollection;

class NotaCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
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
