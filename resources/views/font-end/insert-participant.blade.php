@extends('font-end.layouts.master')
@section('content')
<section class="section section--gradiend-bot" id="speakers" style="margin-top: 50px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('inscription.generate.badge') }}" class="modal__form">
                   {{ csrf_field }}
               {{-- <form action="#" class="modal__form"> --}}
                <br>
                <br>
                <h4 class="modal__title" style="margin-bottom: 30px">Formulaire d'inscription des participants</h4>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form__group form__group--dark">
                            <label for="fullname" class="form__label">NOM</label>
                            <input id="fullname" type="text" name="nom" class="form__input" placeholder="saisir votre nom">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form__group form__group--dark">
                            <label for="fullname" class="form__label">PRENOMS</label>
                            <input id="fullname" type="text" name="prenoms" class="form__input" placeholder="saisir votre prenom">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form__group form__group--dark">
                            <label for="fullname" class="form__label">POSTE</label>
                            <input id="fullname" type="text" name="fonction" class="form__input" placeholder="saisir votre poste">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form__group form__group--dark">
                            <label for="fullname" class="form__label">CONTACT</label>
                            <input id="fullname" type="number" name="telephone" class="form__input" placeholder="saisir votre contact">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form__group form__group--dark">
                            <label for="fullname" class="form__label">MAIL</label>
                            <input id="fullname" type="email" name="email" class="form__input" placeholder="saisir votre mail">
                        </div>
                    </div>
                </div>

                <button type="submit" class="form__btn form__btn--center">
                    <span>Soumettre</span>
                </button>
            </form>
            </div>
        </div>
    </div>
</section>
@endsection

