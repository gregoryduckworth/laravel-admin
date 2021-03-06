<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();
        /*
         * Authenticate the user's personal channel...
         */
        Broadcast::channel('App.Model.User.{userId}', function ($user, $userId) {
            return (int) $user->id === (int) $userId;
        });

        require base_path('routes/channels.php');
    }
}
