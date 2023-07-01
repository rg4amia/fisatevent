<?php

namespace App\Mail;

use App\Models\Participant;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailBadge extends Mailable
{
    use Queueable, SerializesModels;

    public $participant;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Participant $participant)
    {
        $this->participant = $participant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('r4gamia@gmail.com')
                    ->subject('INSCRIPTION POUR BADGE')
                    ->markdown('emails.mailbadge')
                    ->attachFromStorageDisk('badgepdf',  $this->participant->nom . '_' . str_replace(' ', '_', $this->participant->prenom).'.pdf')
                    ->with(
                        [
                            'nom'               =>  $this->participant->nom,
                            'prenom'            =>  $this->participant->prenom,
                            'fonction'          =>  $this->participant->fonction,
                            'telephone'         =>  $this->participant->telephone
                        ]
                    );
    }
}
