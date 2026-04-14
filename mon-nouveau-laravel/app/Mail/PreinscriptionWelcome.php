<?php

namespace App\Mail;

use App\Models\Preinscription;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PreinscriptionWelcome extends Mailable
{
    use Queueable, SerializesModels;

    public $preinscription;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Preinscription $preinscription)
    {
        $this->preinscription = $preinscription;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Confirmation de votre préinscription - UVBF')
                    ->view('emails.welcome');
    }
}
