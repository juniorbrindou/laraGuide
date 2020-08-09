<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NouveauSuiveur extends Mailable
{
    use Queueable, SerializesModels;

    public $suiveur;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($suiveur)
    {
        $this->suiveur= $suiveur;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.nouveau')
                    ->text('mails.nouveau_text');
    }
}
