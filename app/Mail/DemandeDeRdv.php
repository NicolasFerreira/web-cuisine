<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DemandeDeRdv extends Mailable
{
    use Queueable, SerializesModels;
    public $rdv;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($rdv)
    {
        $this->rdv = $rdv;
        $this->subject('Sample title');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.mail-rdv')->subject("Demande de rdv - RMC website");
    }
}
