<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Notification;

class CheckSubscriptionExpiration extends Command
{
    protected $signature = 'subscription:check-expiration';
    protected $description = 'Check for expired subscriptions and create notifications';

    public function handle()
    {
        // Retrieve users with expired subscriptions
        $usersWithExpiredSubscriptions = User::whereHas('subscriptionsMany', function ($query) {
            $query->where('end_date', '<', now());
        })->with('subscriptionsMany')->get();
    
        // Create notifications for each user
        foreach ($usersWithExpiredSubscriptions as $user) {
            // Check if a notification already exists for the user's subscription
            $subscriptionId = $user->subscriptionsMany->first()->id;
            $existingNotification = Notification::where('user_id', $user->id)
                                                ->where('subscription_id', $subscriptionId)
                                                ->exists();
    
            // If no existing notification found, create a new one
            if (!$existingNotification) {
                $notification = new Notification();
                $notification->user_id = $user->id;
                $notification->notification = $user->first_name . " Subscription ends today";
                $notification->subscription_id = $subscriptionId;
                $notification->save();
            }
            // $end=\App\Models\SubScription::where(['user_id'=>$user->id,'id'=>$subscriptionId])->first();
            // if($end){
            //     $end->is_end='yes';
            //     $end->save();
            // }else{

            // }
           

        }
    
        $this->info('Notifications created for users with expired subscriptions.');
    }
}
