@component('mail::message')
# BONJOUR {{ $nom .' '. $prenom }},

Monsieur {{ $prenom}},
Nous venons de vous envoyer votre badge de participation forum.

@component('mail::button', ['url' => ''])
Retour au site
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
