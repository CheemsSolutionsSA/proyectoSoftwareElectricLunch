<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientObserver
{
    /**
     * Handle the Client "created" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function created(Client $client)
    {
        $password = $this->claveAleatoria();
        $to = $client->email;
        $subject = 'Creacion de cuenta exitosa';
        $message =
            'Muchas gracias ' .
            $client->name .
            ' por registrarte a Electric Lunch, tu contraseña es : ' .
            $password;
        $headers = 'De: Electric Lunch Team';
        mail($to, $subject, $message, $headers);

        $user = User::create([
            'name' => $client->name,
            'email' => $client->email,
            'rol_id' => "2",
            'password' => Hash::make($password),
        ]);

        $user->save();
    }

    /**
     * Handle the Client "updated" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function Updated(Client $client)
    {
        DB::table('users')
            ->where('email', $client->email)
            ->update(['name' => $client->name]);
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
