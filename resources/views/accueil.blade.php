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
                        {{--<div class="col-lg-3  col-md-3 col-sm-3">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list text-center text-sm-end">
                                <li class="breadcrumb-item"><a href="/livre"> <i class="fa fa-home"></i> Accueil</a></li>
                                <li class="breadcrumb-item active">Commande</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>--}}
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
                    <form method="POST" action="{{ route('generate.badge') }}">
                        @csrf()
                        <div class="checkout-wrap">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="customer-zone mb-30">
                                        <!-- <p class="cart-page-title">Informations de commande</p> -->
                                        <h4>Informations personnels</h4>
                                        <hr> <br>
                                    </div>
                                    <div class="billing-info-wrap mr-100">
                                        <div class="row">

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Nom <span class="required" title="required">*</span></label>
                                                    <input type="text" name="nom" id="nom" class="form-control" onkeyup="checkField()">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Prénom(s) <span class="required" title="required">*</span></label>
                                                    <input type="text" name="prenom" id="prenom" class="form-control" onkeyup="checkField()">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Fonction<span class="required" title="required">*</span></label>
                                                    <input type="text" name="fonction" id="fonction" class="form-control" onkeyup="checkField()">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Nom du Dirigeant de la Fonction<span class="required" title="required">*</span></label>
                                                    <input type="text" name="nomdirigeantfonction" id="nomdirigeantfonction" class="form-control" onkeyup="checkField()">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Secteur d'activite<span class="required" title="required">*</span></label>
                                                    <select class="js-example-basic-single form-control" name="secteuractivite_id">
                                                        @foreach($secteuractivites as $secteuractivite)
                                                            <option value="{{ $secteuractivite->id }}">{{ $secteuractivite->libelle }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Pays<span class="required" title="required">*</span></label>
                                                    <select class="js-example-basic-single form-control" name="pay_id" id="pays">
                                                        @foreach($pays as $pay)
                                                            <option value="{{ $pay->id }}">{{ $pay->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Ville<span class="required" title="required">*</span></label>
                                                    <input type="text" name="ville" id="ville" class="form-control" onkeyup="checkField()">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Adresse<span class="required" title="required">*</span></label>
                                                    <input type="text" name="adresse" id="adresse" class="form-control" onkeyup="checkField()">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Email <span class="required" title="required">*</span></label>
                                                    <input type="email" name="email" id="email" class="form-control" onkeyup="checkField()">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Téléphone <span class="required" title="required">*</span></label>
                                                    <input type="text" name="telephone" id="telephone" onkeyup="verif_nombre(this); checkField()" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Mobile <span class="required" title="required">*</span></label>
                                                    <input type="text" name="mobile" id="mobile" onkeyup="verif_nombre(this); checkField()" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Fax<span class="required" title="required">*</span></label>
                                                    <input type="text" name="fax" id="fax" class="form-control" onkeyup="checkField()">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="billing-info mb-25">
                                                    <label>Centres d'interets (en 5 lignes)<span class="required" title="required">*</span></label>
                                                    <textarea name="centreinterets" class="form-control" rows="5">
                                                </textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="customer-zone mb-30">
                                                    <!-- <p class="cart-page-title">Informations de livraison</p> -->
                                                    <h4>Tribunes d'interets</h4>
                                                    <hr> <br>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="expositioncommerciale" value="1" id="expositioncommerciale">
                                                    <label class="form-check-label" for="expositioncommerciale">
                                                        Exposition commerciale
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="forumdiscussion" type="checkbox" value=1" id="forumdiscussion">
                                                    <label class="form-check-label" for="forumdiscussion">
                                                        Forum de discussion
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="rencontrebtob" type="checkbox" value="1" id="rencontrebtob">
                                                    <label class="form-check-label" for="rencontrebtob">
                                                        Rencontre B to B
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="reunionministerielle" type="checkbox" value="1" id="reunionministerielle">
                                                    <label class="form-check-label" for="reunionministerielle">
                                                        Reunion ministerielle
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="sessionspecialeprojet" type="checkbox" value="1" id="sessionspecialeprojet">
                                                    <label class="form-check-label" for="sessionspecialeprojet">
                                                        Session speciale sur le financement de projets
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="rendezvous" type="checkbox" value="1" id="rendezvous">
                                                    <label class="form-check-label" for="rendezvous">
                                                        Le rendez-vous de l'inovation
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <ul>
                            <li><button class="button" type="submit">Soumettre</button></li>
                        </ul>
                        <div class="row container">
                            <div class="col-12 mt-50">
                                Vous avez un problème ? Appelez-nous <a href="tel:+2250747138047">+225 07 47 13 80 47</a>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- checkout end -->

            <div class="container">
                <div id="formVisa"></div>
            </div>

        </div>

    </div>
@endsection
@section('js')
<script>
  /*  $(document).ready(function() {
        $('.js-example-basic-single').select2({
            width: 'resolve' // need to override the changed default
        });
    });*/
</script>
@endsection
