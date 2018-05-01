<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class contactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct() {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {

    }
}
