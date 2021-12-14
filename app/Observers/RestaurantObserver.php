<?php

namespace App\Observers;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $password = $this-> claveAleatoria();
        $user = User::create([
            'name' => $restaurant->name,
            'email' => $restaurant->email,
            'rol_id' => "3",    
            'password' => Hash::make($password),
        ]);

        $to = $restaurant->email;
        $subject = 'Creacion de restaurante exitosa';
        $message =
            'Muchas gracias ' .
            $restaurant->name .
            ' por registrarte a Electric Lunch, tu contraseña es : ' .
            $password;
        $headers = 'De: Electric Lunch Team';
        mail($to, $subject, $message, $headers);

        $user->save();

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

    function claveAleatoria(
        $longitud = 6,
        $opcLetra = true,
        $opcNumero = true,
        $opcMayus = true,
        $opcEspecial = false
    ) {
        $letras = 'abcdefghijklmnopqrstuvwxyz';
        $numeros = '1234567890';
        $letrasMayus = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $especiales = '|@#~$%()=^*+[]{}-_';
        $listado = '';
        $password = '';
        if ($opcLetra == true) {
            $listado .= $letras;
        }
        if ($opcNumero == true) {
            $listado .= $numeros;
        }
        if ($opcMayus == true) {
            $listado .= $letrasMayus;
        }
        if ($opcEspecial == true) {
            $listado .= $especiales;
        }

        for ($i = 1; $i <= $longitud; $i++) {
            $caracter = $listado[rand(0, strlen($listado) - 1)];
            $password .= $caracter;
            $listado = str_shuffle($listado);
        }
        return $password;
    }
}
