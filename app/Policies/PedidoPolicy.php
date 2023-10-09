<?php

namespace App\Policies;

use App\Models\Pedido;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PedidoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('pedido_read');

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Pedido $pedido): bool
    {
        return $user->hasPermissionTo('pedido_read');

    }

}
