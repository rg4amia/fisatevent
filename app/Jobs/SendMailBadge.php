<?php

namespace App\Jobs;

use App\Mail\SendMailBadge as MailSendMailBadge;
use Illuminate\Foundation\Bus\Dispatchable;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use PDF;

class SendMailBadge
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $participant;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($participant)
    {
        $this->participant = $participant;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $qr = QrCode::create("https://code-boxx.com");
        $writer = new PngWriter();
        $result = $writer->write($qr);

        $qrcode = $result->getDataUri();

        $participant =  $this->participant;

        $pdf = PDF::loadView('imprimer.index', compact('participant', 'qrcode'))
        ->setPaper('a5', 'Portrait')
        ->setWarnings(false);

        $content = $pdf->download()->getOriginalContent();
        Storage::disk('badgepdf')->put('/' . $this->participant->nom . '_' . str_replace(' ', '_', $this->participant->prenom) . '.pdf', $content);

        Mail::to($this->participant->email)->send(new MailSendMailBadge($this->participant));

    }
}
