<?php

namespace App\Mail;

use App\Models\Note;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NoteCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Note $note)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Récapitulatif de votre note : ' . $this->note->title,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.notes.created',
            with: [
                'note' => $this->note,
            ],
        );
    }

    /**
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
