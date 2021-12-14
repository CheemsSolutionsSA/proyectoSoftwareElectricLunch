<?php

namespace App\Observers;

use App\Models\Restaurant;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;

class RestaurantObserver
{
    /**
     * Handle the Restaurant "created" event.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return void
     */
    public function created(Restaurant $restaurant)
    {
        $clients = DB::table('clients')
            ->select('name', 'email')
            ->get();
        foreach ($clients as $client) {
            $to = $client->email;
            $subject = 'Se creó un nuevo restaurante';
            $message =
                'Hola ' .
                $client->name .
                ' se creó el restaurante: ' .
                $restaurant->name .
                ' ve a visitarlo, correo instantaneo de Electric Lunch';
            $headers = 'De: Electric Lunch Team';
            mail($to, $subject, $message, $headers);
        }
    }

    /**
     * Handle the Restaurant "updated" event.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return void
     */
    public function updated(Restaurant $restaurant)
    {
    }

    /**
     * Handle the Restaurant "deleted" event.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return void
     */
    public function deleted(Restaurant $restaurant)
    {
    }

    /**
     * Handle the Restaurant "restored" event.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return void
     */
    public function restored(Restaurant $restaurant)
    {
        //
    }

    /**
     * Handle the Restaurant "force deleted" event.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return void
     */
    public function forceDeleted(Restaurant $restaurant)
    {
        //
    }
}
