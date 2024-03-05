<?php
/**
 * File name: EProviderChangedEvent.php
 * Last modified: 2023.01.02 at 21:11:38
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Events;

use App\Models\EProvider;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EProviderChangedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $newEProvider;

    public $oldEProvider;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(EProvider $newEProvider, EProvider $oldEProvider)
    {
        //
        $this->newEProvider = $newEProvider;
        $this->oldEProvider = $oldEProvider;
    }

}
