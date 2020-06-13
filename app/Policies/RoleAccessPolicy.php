<?php

namespace App\Policies;

use App\RoleAccess;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RoleAccessPolicy
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
     * @param  \App\RoleAccess  $roleAccess
     * @return mixed
     */
    public function view(User $user, RoleAccess $roleAccess)
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
     * @param  \App\RoleAccess  $roleAccess
     * @return mixed
     */
    public function update(User $user, RoleAccess $roleAccess)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\RoleAccess  $roleAccess
     * @return mixed
     */
    public function delete(User $user, RoleAccess $roleAccess)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\RoleAccess  $roleAccess
     * @return mixed
     */
    public function restore(User $user, RoleAccess $roleAccess)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\RoleAccess  $roleAccess
     * @return mixed
     */
    public function forceDelete(User $user, RoleAccess $roleAccess)
    {
        //
    }
}
