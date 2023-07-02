<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailBadge as JobsSendMailBadge;
use App\Mail\SendMailBadgeEntreprise;
use App\Models\Entreprise;
use App\Models\Participant;
use App\Models\Pays;
use Illuminate\Http\Request;
use function Symfony\Component\String\upper;
use App\Mail\SendMailBadge;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use PDF;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class InscriptionController extends Controller
{
    public function participant(){
        $pays = \App\Models\Pays::orderBy('nom','asc')->get();
        $secteuractivites = \App\Models\SecteurActivite::orderBy('libelle','asc')->get();
        return view('inscription.participant',compact('pays','secteuractivites'));
    }

    public function entreprise(){
        $pays = \App\Models\Pays::orderBy('nom','asc')->get();
        $secteuractivites = \App\Models\SecteurActivite::orderBy('libelle','asc')->get();
        return view('inscription.entreprise',compact('pays','secteuractivites'));
    }

    public function storeParticipant(Request $request){
       // dd($request->all());
        try {

            $participant = new Participant();
            $participant->nom  = $request->nom;
            $participant->prenom  = $request->prenoms;
            $participant->fonction  = $request->fonction;
            $participant->email  = $request->email;
            $participant->telephone  = $request->telephone;
            $participant->save();

            if($participant){
                JobsSendMailBadge::dispatch($participant);
                /* session()->put('participant',$participant);
                $qr = QrCode::create("https://code-boxx.com");
                $writer = new PngWriter();
                $result = $writer->write($qr);

                $qrcode = $result->getDataUri();

                $pdf = PDF::loadView('imprimer.index', compact('participant', 'qrcode'))
                ->setPaper('a5', 'Portrait')
                ->setWarnings(false);

                $content = $pdf->download()->getOriginalContent();
                Storage::disk('badgepdf')->put('/' . $participant->nom . '_' . str_replace(' ', '_', $participant->prenom) . '.pdf', $content);

                Mail::to($participant->email)->send(new SendMailBadge($participant)); */

                $request->session()->flash(' ','VOTRE INSCRIPTION EST VALIDEE ! AFRIKA TRANSTOUR VOUS REMERCIE DE VOTRE INTERET. A BIENTOT AU FISAT 2022 !');
            }
        } catch (\Exception $e){
            $request->session()->flash('warning',$e->getMessage());
            //return back();
        }

        return redirect(route('inscription.generate.success.badge'));
    }

    public function storeEntreprise(Request $request) {

        try {
            $entreprise = Entreprise::create($request->all());

            if($entreprise){
                session()->put('entreprise',$entreprise);
                $request->session()->flash(' ','VOTRE INSCRIPTION EST VALIDEE ! AFRIKA TRANSTOUR VOUS REMERCIE DE VOTRE INTERET. A BIENTOT AU FISAT 2022 !');
            }
        } catch (\Exception $e){
            $request->session()->flash('warning',$e->getMessage());
        }

        return redirect(route('generate.success.badge.etpse'));
    }

    public function success(){

        $participant =  session()->get('participant');

        /* if ( session()->get('success') == null) {
            return redirect(route('accueil'));
        } */

        return view('font-end.success',compact('participant'));
       // return view('success',compact('participant'));
    }

     public function successEntreprise(){
        $entreprise =  session()->get('entreprise');
         return view('successentreprise',compact('entreprise'));
    }

    public function imprimerBadgeEntreprise(Entreprise $entreprise){
        // L'instance PDF avec une vue : resources/views/imprimer/index.blade.php
        $entreprise =  session()->get('entreprise');

        $pdf = PDF::loadView('imprimer.indexentreprise', compact('entreprise'))
            ->setPaper('a5', 'Portrait')
            ->setWarnings(false);
        $content = $pdf->download()->getOriginalContent();
        Storage::disk('badgepdf')->put('/'. $entreprise->telephone . '.pdf', $content);

        return $pdf->stream();
    }


    public function imprimerBadge (Participant $participant)
    {
        //dd($participant);
        // (B) CREATE QR CODE
        $qr = QrCode::create("https://code-boxx.com");
        $writer = new PngWriter();
        $result = $writer->write($qr);

       $qrcode = $result->getDataUri();

        $pdf = PDF::loadView('imprimer.index', compact('participant', 'qrcode'))
                    ->setPaper('a5', 'Portrait')
                    ->setWarnings(false);

        $content = $pdf->download()->getOriginalContent();
        Storage::disk('badgepdf')->put('/'. $participant->nom .'_'.$participant->prenom. '.pdf', $content);

        return $pdf->stream();
    }

    public function emailbadge(Participant $participant, Request $request){

        $participant = session()->get('participant');
        Mail::to($participant->email)->send(new SendMailBadge($participant));

        if (Mail::failures()) {
             $request->session()->flash('warning', 'Désolé ! Veuillez réessayer ce dernier');
        } else {
             $request->session()->flash('success','Super ! Envoi réussi du mail');
        }

        return back();
    }

    public function emailbadgeEntreprise(Entreprise $entreprise, Request $request){
        $entreprise = session()->get('entreprise');
        Mail::to($entreprise->email)->send(new SendMailBadgeEntreprise($entreprise));

        if (Mail::failures()) {
             $request->session()->flash('warning', 'Sorry! Please try again latter');
        } else {
             $request->session()->flash('success','Great! Successfully send in your mail');
        }

        return back();
    }
}
