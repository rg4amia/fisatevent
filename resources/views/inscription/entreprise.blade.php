@extends('layouts.main')
@section('breadcrumb')
    <section class="hero-2" id="Home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center text-xl-start">
                            <h3 class="breadcrumb-title">FORMULAIRE D’INSCRIPTION ENTREPRISE</h3>
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
                    <form method="POST" action="{{ route('generate.badge.entreprise') }}">
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
                                                    <label>Nom de l'Entreprise<span class="required" title="required">*</span></label>
                                                    <input type="text" name="nom_entreprise" id="nom_entreprise" class="form-control" onkeyup="checkField()">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Numéros CNPS <span class="required" title="required">*</span></label>
                                                    <input type="text" name="numero_cnps" id="numero_cnps" class="form-control" onkeyup="checkField()">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Numéros du compte contribuable<span class="required" title="required">*</span></label>
                                                    <input type="text" name="numero_compte_contribuable" id="numero_compte_contribuable" class="form-control" onkeyup="checkField()">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Site Web<span class="required" title="required">*</span></label>
                                                    <input type="text" name="site_web" id="site_web" class="form-control" onkeyup="checkField()">
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
                                                    <label>Téléphone de l'Entreprise<span class="required" title="required">*</span></label>
                                                    <input class="form-control" name="telephone" id="telephone" placeholder="Entrez votre téléphone" type="text" value="{{ old('telephone') }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Nom du responsable <span class="required" title="required">*</span></label>
                                                    <input type="text" name="nom_responsable" id="nom_responsable" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Téléphone du responsable<span class="required" title="required">*</span></label>
                                                    <input type="text" name="telephone_responsable" id="telephone_responsable" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Email de l'entreprise <span class="required" title="required">*</span></label>
                                                    <input type="email" name="email_entreprise" id="email_entreprise" class="form-control" onkeyup="checkField()">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-25">
                                                    <label>Adresse Géographique <span class="required" title="required">*</span></label>
                                                    <input type="text" name="adresse_geographie" id="adresse_geographie"  class="form-control">
                                                </div>
                                            </div>

                                        </div>

                                       {{-- <div class="row">
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

                                        </div>--}}
                                    </div>

                                </div>
                            </div>
                        </div>
                        <ul>
                            <li><button class="button" type="submit">Valider</button></li>
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
