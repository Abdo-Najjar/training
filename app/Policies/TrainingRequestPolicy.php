<?php

namespace App\Policies;

use App\Models\TrainingRequest;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TrainingRequestPolicy
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
     * @param  \App\Models\TrainingRequest  $trainingRequest
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, TrainingRequest $trainingRequest)
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
        return $user->isTrinee();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TrainingRequest  $trainingRequest
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, TrainingRequest $trainingRequest)
    {
        return $user->isHOC();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TrainingRequest  $trainingRequest
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, TrainingRequest $trainingRequest)
    {
        return !$user->isTrinee();
    }
}
