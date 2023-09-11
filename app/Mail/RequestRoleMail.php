<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestRoleMail extends Mailable
{
    use Queueable, SerializesModels;

    public $info;
    
    
    public function __construct($info)
    {
        $this->info = $info;
    }

    public function build() {
        return $this->view('mail.roleRequest',[
            'info'=>$this->info]
        );
    }


    
    
    
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Request Role Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.roleRequest',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
