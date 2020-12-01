<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data=[])
    {
        $this->data = $data;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('samora.sm.sam@gmail.com')->subject('Contact us message')->view
        ('dynamic_email_template')->with('data', $this->data)
        ->attach($this->$data['document']->getRealPath(),
        [
            'as' => $this->data['document']->getClientOriginName(),
            'mime' => $this->data['document']->getClientMimeType(),
        ]);

        // return $this->markdown('emails.welcome');
    }
}
