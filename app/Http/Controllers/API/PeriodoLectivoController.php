<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PeriodoLectivo;
use App\Http\Resources\PeriodoLectivoResource;

class PeriodoLectivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PeriodoLectivoResource::collection(PeriodoLectivo::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $periodoLectivo = json_decode($request->getContent(), true);

        $periodoLectivo = PeriodoLectivo::create($periodoLectivo);

        return new PeriodoLectivoResource($periodoLectivo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PeriodoLectivo $periodoLectivo)
    {
        return new PeriodoLectivoResource($periodoLectivo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeriodoLectivo $periodoLectivo)
    {
        $periodoLectivoData = json_decode($request->getContent(), true);
        $periodoLectivo->update($periodoLectivoData);

        return new PeriodoLectivoResource($periodoLectivo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeriodoLectivo $periodoLectivo)
    {
        $periodoLectivo->delete();
    }
}
