<?php
/*
 * File name: WalletTransactionCreatedEvent.php
 * Last modified: 2023.08.10 at 18:03:35
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Events;

use App\Models\WalletTransaction;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class WalletTransactionCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(WalletTransaction $walletTransaction)
    {
        if ($walletTransaction->action == 'credit') {
            $walletTransaction->wallet->balance += $walletTransaction->amount;
        } else if ($walletTransaction->action == 'debit') {
            $walletTransaction->wallet->balance -= $walletTransaction->amount;
        }
        $walletTransaction->wallet->save();
    }
}
