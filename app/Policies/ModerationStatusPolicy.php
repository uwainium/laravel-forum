<?php

namespace App\Policies;

use App\ModerationStatus;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ModerationStatusPolicy
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
     * @param  \App\ModerationStatus  $moderationStatus
     * @return mixed
     */
    public function view(User $user, ModerationStatus $moderationStatus)
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
     * @param  \App\ModerationStatus  $moderationStatus
     * @return mixed
     */
    public function update(User $user, ModerationStatus $moderationStatus)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\ModerationStatus  $moderationStatus
     * @return mixed
     */
    public function delete(User $user, ModerationStatus $moderationStatus)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\ModerationStatus  $moderationStatus
     * @return mixed
     */
    public function restore(User $user, ModerationStatus $moderationStatus)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\ModerationStatus  $moderationStatus
     * @return mixed
     */
    public function forceDelete(User $user, ModerationStatus $moderationStatus)
    {
        //
    }
}
