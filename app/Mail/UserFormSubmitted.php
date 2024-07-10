<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class UserFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    public $locale;
    /**
     * Create a new message instance.
     */
     public function __construct($formData, $locale)
    {
        $this->formData = $formData;
        $this->locale = $locale;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = __('common.subject_received');

        return new Envelope(
            from: new Address('info@alphacardetail.com', 'Alpha Car Detail'),
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        app()->setLocale($this->locale);

        return new Content(
            view: 'email.UserConfirmationMail',
            with: ['formData' => $this->formData]
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
