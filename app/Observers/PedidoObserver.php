<?php

namespace App\Observers;

use App\Models\Pedido;
use App\Models\User;
use App\Notifications\NovoPedido;

class PedidoObserver
{
    /**
     * Handle the Pedido "created" event.
     */
    public function created(Pedido $pedido): void
    {
        // Recupere todos os usuários
        $users = User::all();

        // Filtrar os usuários com a função "Admin"
        $adminUsers = $users->filter(function ($user) {
            return $user->hasRole("Admin");
        });

        // Enviar notificação para os usuários "Admin"
        foreach ($adminUsers as $recipient) {
            $recipient->notify(new NovoPedido($pedido));
        }
    }


    /**
     * Handle the Pedido "updated" event.
     */
    public function updated(Pedido $pedido): void
    {
        //
    }

    /**
     * Handle the Pedido "deleted" event.
     */
    public function deleted(Pedido $pedido): void
    {
        //
    }

    /**
     * Handle the Pedido "restored" event.
     */
    public function restored(Pedido $pedido): void
    {
        //
    }

    /**
     * Handle the Pedido "force deleted" event.
     */
    public function forceDeleted(Pedido $pedido): void
    {
        //
    }
}
