<?php
/*
 * File name: WalletTransactionCreatingEvent.php
 * Last modified: 2023.08.10 at 18:03:35
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Events;

use App\Models\WalletTransaction;
use Exception;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class WalletTransactionCreatingEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     * @throws Exception
     */
    public function __construct(WalletTransaction $walletTransaction)
    {
        if ($walletTransaction->action == 'debit' && $walletTransaction->wallet->balance < $walletTransaction->amount) {
            throw new Exception(__('lang.wallet_balance_insufficient'));
        }
    }
}
