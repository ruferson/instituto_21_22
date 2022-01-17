<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\falta_profesor;
use Illuminate\Http\Request;
use App\Http\Resources\falta_profesorResource;

class falta_profesorController extends Controller
{

    public function index()
    {
        return falta_profesorResource::collection(falta_profesor::paginate());
    }

    public function store(Request $request)
    {
        $falta_profesor = json_decode($request->getContent(), true);

        $falta_profesor = falta_profesor::create($falta_profesor);

        return new falta_profesorResource($falta_profesor);
    }

    public function show(falta_profesor $falta_profesor)
    {
        return new falta_profesorResource($falta_profesor);
    }

    public function update(Request $request, falta_profesor $falta_profesor)
    {
        $falta_profesorData = json_decode($request->getContent(), true);
        $falta_profesor->update($falta_profesorData);

        return new falta_profesorResource($falta_profesor);
    }

    public function destroy(falta_profesor $falta_profesor)
    {
        $falta_profesor->delete();
    }
}
