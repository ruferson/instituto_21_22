<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\falta_profesor;
use App\Http\Resources\falta_profesorResource;

class falta_profesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return falta_profesorResource::collection(falta_profesor::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $falta_profesor = json_decode($request->getContent(), true);

        $falta_profesor = falta_profesor::create($falta_profesor);

        return new falta_profesorResource($falta_profesor);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(falta_profesor $falta_profesor)
    {
        return new falta_profesorResource($falta_profesor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, falta_profesor $falta_profesor)
    {
        $falta_profesorData = json_decode($request->getContent(), true);
        $falta_profesor->update($falta_profesorData);

        return new falta_profesorResource($falta_profesor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(falta_profesor $falta_profesor)
    {
        $falta_profesor->delete();
    }
}