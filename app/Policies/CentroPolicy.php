<?php

namespace App\Policies;

use App\Models\Centro;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CentroPolicy
{
    use HandlesAuthorization;

    /**
     * Perform pre-authorization checks.
     *
     * @param  \App\Models\User  $user
     * @param  string  $ability
     * @return void|bool
     */
    public function before(User $user, $ability)
    {
        if ($user->isAdministrator()) {
            return true;
        }
    }
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->id == 10; // un ejemplo de autorización a un usuario concreto.
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Centro $centro)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true; //$user->id == 1; // 'administrador';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Centro $centro)
    {
<<<<<<< HEAD
        if (($centroCordinado = $user->centroCoordinado()) &&
=======
        if (($centroCoordinado = $user->centroCoordinado) &&
>>>>>>> dd4f6ffaea26659a4dbccb8c93733a1cefe849ec
        $centro->id == $centroCoordinado->id) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Centro $centro)
    {
<<<<<<< HEAD
        return $user->isCoordinador($centro);
=======

        if (($centroCoordinado = $user->centroCoordinado) &&
        $centro->id == $centroCoordinado->id) {
            return true;
        } else {
            return false;
        }
>>>>>>> dd4f6ffaea26659a4dbccb8c93733a1cefe849ec
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Centro $centro)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Centro $centro)
    {
        //
    }
}
