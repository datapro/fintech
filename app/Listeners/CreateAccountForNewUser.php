<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Registered;
use App\Models\Account;
use App\Models\User;

class CreateAccountForNewUser
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event)
    {
        // Automatically create an account with a balance of 0 when a new user registers
        $user = $event->user;
        Account::create([
            'user_id' => $user->id,
            'balance' => 0, // Initialize with zero balance
        ]);
    }
}
