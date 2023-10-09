<?php

namespace App\Policies;

use App\Models\ImagemProduto;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ImagemProdutoPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('produto_read');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user): bool
    {
        return $user->hasPermissionTo('produto_read');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('produto_create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user): bool
    {
        return $user->hasPermissionTo('produto_update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user): bool
    {
        return $user->hasPermissionTo('produto_delete');
    }
}
