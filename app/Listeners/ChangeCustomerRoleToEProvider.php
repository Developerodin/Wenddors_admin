<?php
/*
 * File name: ChangeCustomerRoleToEProvider.php
 * Last modified: 2023.09.15 at 13:38:29
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Listeners;

/**
 * Class ChangeCustomerRoleToEProvider
 * @package App\Listeners
 */
class ChangeCustomerRoleToEProvider
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        if ($event->newEProvider->accepted) {
            foreach ($event->newEProvider->users as $user) {
                $user->syncRoles(['provider']);
            }
        }
    }
}
