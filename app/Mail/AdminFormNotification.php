<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class AdminFormNotification extends Mailable
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
        app()->setLocale($this->locale);

        return new Envelope(
            from: new Address($this->formData['email'], $this->formData['full_name']),
            subject: __('common.admin_subject_received')
        );
    }

    /** 
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.AdminNotification',
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
