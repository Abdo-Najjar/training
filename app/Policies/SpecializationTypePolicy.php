<?php

namespace App\Policies;

use App\Models\SpecializationType;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SpecializationTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SpecializationType  $specializationType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, SpecializationType $specializationType)
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
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SpecializationType  $specializationType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, SpecializationType $specializationType)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SpecializationType  $specializationType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, SpecializationType $specializationType)
    {
        return $user->isAdmin();
    }
}
