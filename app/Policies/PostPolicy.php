<?php

namespace App\Policies;

use App\Models\PostUser;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->isAdmin() || $user->isUser();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, PostUser $post): bool
    {
        return $user->isAdmin() || $user->isUser();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->isAdmin() || $user->isUser();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, PostUser $post): bool
    {
        return $user->isAdmin() ;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, PostUser $post): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can bulk delete models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, PostUser $post): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, PostUser $post): bool
    {
        return $user->isAdmin();
    }

     /**
     * Determine whether the user can bulk restore models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently bulk delete models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->isAdmin();
    }
}
