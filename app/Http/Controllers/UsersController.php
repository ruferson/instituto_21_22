<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Materia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserResource::collection(User::paginate(20));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = json_decode($request->getContent(), true);

        $user = User::create($user);

        return new UserResource($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $userData = json_decode($request->getContent(), true);
        $user->update($userData);

        return new UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    }
    /**
     * Notas = array de nota
     * Nota tiene id, user_id, materia_id
     */
    public function notaMedia($materia_id)
    {
        $user = Auth::user();
        $notas = $user->notas;

        $cantidad = 0;
        $sumaNotas=0;

        foreach ($notas as $nota){
            if ($nota->materia_id==$materia_id){
                $cantidad++;
                $sumaNotas+=$nota->nota;
            }
        }
        if ($cantidad==0){
            return 0;
        } else {
            return ($sumaNotas/$cantidad);
        }




    }


}
