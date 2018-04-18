<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class contactMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The message instance
     * @var Enquiry
     * 
     */
    public $enquiry;
    public function __construct(Request $request) {
        $this->enquiry = $request->all();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        $enquiry = $request->all();
        var_dump($request);
        return $this->from($enquiry->email)
                    ->subject($request->subject)
                    ->view('emails/contact');
    }
}
