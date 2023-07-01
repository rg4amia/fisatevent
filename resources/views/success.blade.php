@extends('layouts.main')
@section('breadcrumb')
    <section class="hero-2" id="Home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center text-xl-start">
                            <h3 class="breadcrumb-title">FORMULAIRE D’INSCRIPTION PARTICIPANT</h3>
                            <span>POUR RECEVOIR VOTRE BADGE ET GAGNER DU TEMPS, VEUILLEZ REMPLIR LE FORMULAIRE</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <div id="main-wrapper">
        <div class="site-wrapper-reveal border-bottom features">
            <!-- checkout start -->
            <div class="checkout-main-area section-space--ptb_90">
                <div class="container">
                    @include('layouts.inc.flash')
                    <div class="row">
                        <div class="col-lg-6">
                            <a target="_blank" href="{{ route('inscription.generate.imprimer.badge') }}" class="btn btn-danger">IMPRIMER VOTRE BADGE</a>
                        </div>
                        <div class="col-lg-6">
                            <a target="_blank" href="{{ route('inscription.send-email.badge') }}" class="btn btn-danger">RECEVOIR VOTRE BADGE PAR MAIL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
