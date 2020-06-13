<?php

namespace App\Policies;

use App\Torso;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TorsoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Torso  $torso
     * @return mixed
     */
    public function view(User $user, Torso $torso)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Torso  $torso
     * @return mixed
     */
    public function update(User $user, Torso $torso)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Torso  $torso
     * @return mixed
     */
    public function delete(User $user, Torso $torso)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Torso  $torso
     * @return mixed
     */
    public function restore(User $user, Torso $torso)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Torso  $torso
     * @return mixed
     */
    public function forceDelete(User $user, Torso $torso)
    {
        //
    }
}
