<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

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
        $opcLetra = true;
        $opcNumero = true;
        $opcMayus = true;
        $opcEspecial = false;
        $longitud = 6;

        $letras ="abcdefghijklmnopqrstuvwxyz";
        $numeros = "1234567890";
        $letrasMayus = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $especiales ="|@#~$%()=^*+[]{}-_";
        $listado = "";
        $password = "";
        if ($opcLetra == TRUE) $listado .= $letras;
        if ($opcNumero == TRUE) $listado .= $numeros;
        if($opcMayus == TRUE) $listado .= $letrasMayus;
        if($opcEspecial == TRUE) $listado .= $especiales;
        
        for( $i=1; $i<=$longitud; $i++) {
        $caracter = $listado[rand(0,strlen($listado)-1)];
        $password.=$caracter;
        $listado = str_shuffle($listado);
        }

        $to = $client->email;
        $subject = "Creacion de cuenta exitosa";
        $message = "Muchas gracias " .$client->name." por registrarte a Electric Lunch, tu contraseña es : ". $password;
        $headers = "De: Electric Lunch Team";
        mail($to,$subject,$message,$headers);

        $user = new User();
        $user->name = $client->name;
        $user->email = $client->email;
        $user->password = $password; 
        $user->save();
    }



    /**
     * Handle the Client "updated" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function updated(Client $client)
    {
        //
    }

    /**
     * Handle the Client "deleted" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function deleted(Client $client)
    {
        DB::table('users')->whereEmail($client->email)->delete();
    }

    /**
     * Handle the Client "restored" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function restored(Client $client)
    {
        //
    }

    /**
     * Handle the Client "force deleted" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function forceDeleted(Client $client)
    {
        //
    }
}
