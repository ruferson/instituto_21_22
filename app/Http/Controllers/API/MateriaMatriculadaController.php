<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\MateriaMatriculadaResource;
use App\Models\MateriaMatriculada;
use Illuminate\Http\Request;

class MateriaMatriculadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MateriaMatriculadaResource::collection(MateriaMatriculada::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materiaMatriculada = json_decode($request->getContent(), true);

        $materiaMatriculada = MateriaMatriculada::create($materiaMatriculada);

        return new MateriaMatriculadaResource($materiaMatriculada);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MateriaMatriculada  $materiaMatriculada
     * @return \Illuminate\Http\Response
     */
    public function show(MateriaMatriculada $materiaMatriculada)
    {
        return new MateriaMatriculadaResource($materiaMatriculada);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MateriaMatriculada  $materiaMatriculada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MateriaMatriculada $materiaMatriculada)
    {
        $materiaMatriculadaDatos = json_decode($request->getContent(), true);
        $materiaMatriculada->update($materiaMatriculadaDatos);

        return new MateriaMatriculadaResource($materiaMatriculada);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MateriaMatriculada  $materiaMatriculada
     * @return \Illuminate\Http\Response
     */
    public function destroy(MateriaMatriculada $materiaMatriculada)
    {
        $materiaMatriculada->delete();
    }
}
