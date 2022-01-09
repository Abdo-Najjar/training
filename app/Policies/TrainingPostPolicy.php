<?php

namespace App\Policies;

use App\Models\TrainingPost;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TrainingPostPolicy
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
     * @param  \App\Models\TrainingPost  $trainingPost
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, TrainingPost $trainingPost)
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
        return !$user->isAdmin();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TrainingPost  $trainingPost
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, TrainingPost $trainingPost)
    {
        return !$user->isAdmin() and $trainingPost->user_id == $user->id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TrainingPost  $trainingPost
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, TrainingPost $trainingPost)
    {
        return $user->isAdmin() || $trainingPost->user_id == $user->id;
    }
}
