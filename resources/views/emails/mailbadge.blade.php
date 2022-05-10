@component('mail::message')
# BONJOUR {{ $nom .' '. $prenom }},

Rencontre prevu avec {{ $nom }} demain


@component('mail::button', ['url' => ''])
Retour au site
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
