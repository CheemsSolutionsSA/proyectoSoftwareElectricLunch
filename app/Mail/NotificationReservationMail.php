<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificationReservationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Reserva realizada";
    public $restaurant = "";
    public $date = "";
    public $cant = "";
    public $price = "";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($restaurant, $date, $cant, $price)
    {
        $this->restaurant = $restaurant;
        $this->date = $date;
        $this->cant = $cant;
        $this->price = $price;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email');
    }
}
