<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MyEmail extends Mailable
{
    use Queueable, SerializesModels;
public $formdata;
    public function __construct( $formdata)
    {
        $this->formdata = $formdata;
        
    }

    public function envelope()
    {
        return new Envelope(
            
            subject: $this->formdata['userSubject']
        );
    }


    public function content()
    {

        return new Content(
            view: 'front.mail.welcome-email',
            with: [
                'userName' => $this->formdata['userName'],
                'userMessage' => $this->formdata['userMessage']
            ],
        );
    }



    public function attachments()
    {
        return [];
    }
}
