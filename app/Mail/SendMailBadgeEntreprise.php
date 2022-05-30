<?php

namespace App\Mail;

use App\Models\Entreprise;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailBadgeEntreprise extends Mailable
{
    use Queueable, SerializesModels;

    public $entreprise;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Entreprise $entreprise)
    {
        $this->entreprise = $entreprise;
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
            ->markdown('emails.mailbadgeentreprise')
            ->attachFromStorageDisk('badgepdf', $this->entreprise->telephone.'.pdf')
            ->with(
                [
                    'nom_entreprise'    =>  $this->entreprise->nom_entreprise,
                    'nom_responsable'   =>  $this->entreprise->nom_responsable,
                ]
            );
    }
}
