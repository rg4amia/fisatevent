<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Pays;
use Illuminate\Http\Request;
use function Symfony\Component\String\upper;
use App\Mail\SendMailBadge;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use PDF;

class InscriptionController extends Controller
{
    public function store(Request $request){

        try {

            $participant = Participant::create($request->all());

            if($participant){
                session()->put('participant',$participant);
                $request->session()->flash(' ','VOTRE INSCRIPTION EST VALIDEE ! AFRIKA TRANSTOUR VOUS REMERCIE DE VOTRE INTERET. A BIENTOT AU FISAT 2022 !');
            }
        } catch (\Exception $e){
            $request->session()->flash('warning',upper($e->getMessage()));
        }

        return redirect(route('generate.success.badge'));
    }

    public function success(){

        $participant =  session()->get('participant');

        /* if ( session()->get('success') == null) {
            return redirect(route('accueil'));
        } */

        return view('success',compact('participant'));
    }


    public function imprimerBadge (Participant $participant)
    {
        // L'instance PDF avec une vue : resources/views/imprimer/index.blade.php
        $participant = session()->get('participant');

        $pdf = PDF::loadView('imprimer.index', compact('participant'))
                    ->setPaper('a5', 'Portrait')
                    ->setWarnings(false);
        $content = $pdf->download()->getOriginalContent();
        Storage::disk('badgepdf')->put('/'. $participant->telephone . '.pdf', $content);

        return $pdf->stream();
    }

    public function emailbadge(Participant $participant, Request $request){
        $participant = session()->get('participant');
       // dd($participant);
        Mail::to($participant->email)->send(new SendMailBadge($participant));

        if (Mail::failures()) {
             $request->session()->flash('warning', 'Sorry! Please try again latter');
        } else {
             $request->session()->flash('success','Great! Successfully send in your mail');
        }

        return back();
    }
}
