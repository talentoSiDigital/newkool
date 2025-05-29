<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public $data
    )
    {
       
    }

    /**
     * Get the message envelope.
     */
        // public function envelope($email, $subject, $name): Envelope
        // {
        //     return new Envelope(
        //         // from: new Address($email, $name),
        //         // subject: $subject,
        //     );
        // }
    public function envelope(): Envelope
    {
        return new Envelope(
            // from: new Address($email, $name),
            // subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view:''
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

    public function build(){
        return $this->view('mail')
                    ->subject('Nuevo Mensaje')
                    ->from('tecnologia@newkoolamerica.com')
                    ->with('data',$this->data);
    }
}
