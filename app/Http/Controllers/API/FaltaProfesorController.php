<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\falta_profesor;
use Illuminate\Http\Request;
use App\Http\Resources\FaltaProfesorResource;

class FaltaProfesorController extends Controller
{

    public function index()
    {
        return FaltaProfesorResource::collection(FaltaProfesor::paginate());
    }

    public function store(Request $request)
    {
        $falta_profesor = json_decode($request->getContent(), true);

        $falta_profesor = FaltaProfesor::create($falta_profesor);

        return new FaltaProfesorResource($falta_profesor);
    }

    public function show(FaltaProfesor $falta_profesor)
    {
        return new FaltaProfesorResource($falta_profesor);
    }

    public function update(Request $request, FaltaProfesor $falta_profesor)
    {
        $falta_profesorData = json_decode($request->getContent(), true);
        $falta_profesor->update($falta_profesorData);

        return new FaltaProfesorResource($falta_profesor);
    }

    public function destroy(FaltaProfesor $falta_profesor)
    {
        $falta_profesor->delete();
    }
}
