<?php

namespace App\Policies;

use App\Dashboard;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DashboardPolicy
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
     * @param  \App\Dashboard  $dashboard
     * @return mixed
     */
    public function view(User $user, Dashboard $dashboard)
    {
        if($user->level_id !== 2 || $user->level_id !==3) {
            return redirect()->back();
        }
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
     * @param  \App\Dashboard  $dashboard
     * @return mixed
     */
    public function update(User $user, Dashboard $dashboard)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Dashboard  $dashboard
     * @return mixed
     */
    public function delete(User $user, Dashboard $dashboard)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Dashboard  $dashboard
     * @return mixed
     */
    public function restore(User $user, Dashboard $dashboard)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Dashboard  $dashboard
     * @return mixed
     */
    public function forceDelete(User $user, Dashboard $dashboard)
    {
        //
    }
}
